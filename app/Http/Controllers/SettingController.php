<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblSettingModel;
use App\Models\CommonModel;
use App\Models\tblMenuGroupModel;
use Illuminate\Pagination\Paginator;
use Validator;
class SettingController extends Controller
{
	
    public function info($page) {       
        $data_s = new \stdClass();
        $allset = tblSettingModel::all();
        foreach ($allset as $item) {
            if ($item->key && $item->value) {
                $data_s->{$item->key} = $item->value;
            }
        }
		$menu = tblMenuGroupModel::get();
        return view('admin.setting.' . $page)->with('data', $data_s)->with('menu', $menu);
    }
	public function info_post(Request $request) {        
        $all_input = $request->all();
        foreach ($all_input as $key => $value) {
            if ($key) {
                $check = tblSettingModel::where('key', $key)->first();
                if ($check) {
                    $check->key = $key;
					if($key=='setting_home28' || $key=='setting_home31' || $key=='setting_home34' || $key=='setting_home37'){
						$check->value = implode(',',$value);
					}else{
						$check->value = $value;
					}
                    $check->save();
                } else {
                    $add_new = new tblSettingModel();
                    $add_new->key = $key;
                    if($key=='setting_home28' || $key=='setting_home31' || $key=='setting_home34' || $key=='setting_home37'){
						$add_new->value = implode(',',$value);
					}else{
						$add_new->value = $value;
					}
                    $add_new->save();
                }
            }
        }      
		\Cache::forget('default_setting');
		\Session::flash('admin_notify_success', 'Cập nhật thành công');
        return \Redirect::back();
    }
	public static function getAll() {
		$allset = \Cache::remember('default_setting',86400000,function(){
			return tblSettingModel::all();
		});
		$data_s = new \stdClass();
        foreach ($allset as $item) {
			if($item->key && $item->value){
				$data_s->{$item->key} = $item->value;  
			}
        }
		return $data_s;
	}
	public function image_post(Request $request){
        $all_input = $request->all();
		$acceptedFormats = array('image/jpeg', 'image/gif', 'image/png'); 
		$list_file = ['website_logo','website_logo1','website_banner1','website_banner2','website_banner3','website_banner4','website_banner5'];
		$list_hidden = ['hidden_website_logo','hidden_website_logo1','hidden_website_banner1','hidden_website_banner2','hidden_website_banner3','hidden_website_banner4','hidden_website_banner5'];
		$checkempty='';
		foreach($list_file as $item){
			if($request->hasFile($item)){
				$extension = $request->file($item)->getMimeType();
				$size = $request->file($item)->getSize();
				/* max 5mb */
				if (($size < 5000000) && in_array($extension, $acceptedFormats)) {
					$checkempty.='1';
				}else{
					$checkempty.='0';
				}
			}
		}
		$flagempty = strpos($checkempty, '0');
		if ($flagempty !== false) {
			\Session::flash('admin_notify_success',"File tối đa 5mb");
			return \Redirect::back();
		}else{
			$i=0;
			foreach($list_file as $item1){
				if($request->hasFile($item1)){					
					/* insert file mới */
					$file = $request->file($item1);					
					$url = CommonModel::save_img($request->file($item1));
					$check = tblSettingModel::where('key', $item1)->first();
					if($check){
						CommonModel::delete_img($file);
						$check->value = $url;
						$check->save();
					}else{
						$add_new = new tblSettingModel();
						$add_new->key = $item1;
						$add_new->value = $url;
						$add_new->save();
					}
				}else{
					$check = tblSettingModel::where('key', $item1)->first();				;
					if($check){						
						if($request->input($list_hidden[$i])==''){
							/* xoa file cũ */
							if(\File::exists(public_path().$check->value)){
								\File::delete(public_path().$check->value);
							} 
							$check->value = '';
							$check->save();
						}
					}else{
						$add_new = new tblSettingModel();
						$add_new->key = $item1;
						$add_new->value = '';
						$add_new->save();
					}
					
				}
				$i++;
			}			
		}
		\Cache::forget('default_setting');
		\Session::flash('admin_notify_success', 'Cập nhật thành công');
		return \Redirect::back();
    }
}
