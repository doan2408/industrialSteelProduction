<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblSlideModel;
use App\Models\CommonModel;
use Validator;
use Illuminate\Pagination\Paginator;
class SlideController extends Controller {	
	
	public function create(){
		$data = tblSlideModel::where('type',0)->orderBy('position','asc')->get();
		return view('admin.slide.add')->with('data',$data);
	}
	public function store(Request $request){
		$list_data=[];
		if($request->has('list_slide_image')){
			if(count($request->list_slide_image)>0){
				$images = '';
				$i=0;
				$list_slide_position = $request->list_slide_position;
				$list_slide_url = $request->list_slide_url;
				foreach($request->list_slide_image as $item){
					if(isset($list_slide_position[$i])){
						$position=$list_slide_position[$i];
					}else{
						$position=0;
					}
					if(strpos($item,'cache_files/files_upload') !== false){
						$avatar = CommonModel::move_img($item);
					}else{
						$avatar = $item;
					}
					$list_data[] = ['position'=>$position,'avatar'=>$avatar];
					$i++;
				}
			}
		}
		\DB::table('tbl_slide')->where('type',0)->delete();
		if(count($list_data)>0){
			\DB::table('tbl_slide')->insert($list_data);
		}	
		\Cache::forget('home_slide');
		\Session::flash('admin_notify_success', 'Lưu thành công');
		return \Redirect::back();
	}
	public function create1(){
		$data = tblSlideModel::where('type',1)->orderBy('position','asc')->get();
		return view('admin.slide.add1')->with('data',$data);
	}
	public function store1(Request $request){
		$list_data=[];
		if($request->has('list_slide_image')){
			if(count($request->list_slide_image)>0){
				$images = '';
				$i=0;
				$list_slide_position = $request->list_slide_position;
				$list_slide_url = $request->list_slide_url;
				foreach($request->list_slide_image as $item){
					if(isset($list_slide_position[$i])){
						$position=$list_slide_position[$i];
					}else{
						$position=0;
					}					
					if(strpos($item,'cache_files/files_upload') !== false){
						$avatar = CommonModel::move_img($item);
					}else{
						$avatar = $item;
					}
					$list_data[] = ['position'=>$position,'avatar'=>$avatar,'type'=>1];
					$i++;
				}
			}
		}
		\DB::table('tbl_slide')->where('type',1)->delete();
		if(count($list_data)>0){
			\DB::table('tbl_slide')->insert($list_data);
		}	
		\Cache::forget('home_slide1');
		\Session::flash('admin_notify_success', 'Lưu thành công');
		return \Redirect::back();
	}
	
}
