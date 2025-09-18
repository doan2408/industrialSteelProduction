<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblServicesModel;
use App\Models\tblSeoModel;
use App\Models\CommonModel;
use Validator;
use Illuminate\Pagination\Paginator;
class ServicesController extends Controller {
	
	
    public function data(Request $request){
		if($request->has('length')){
			$p_pages = $request->length;
		}else{
			$p_pages=10;
		}
		if($request->has('draw')){
			$draw = $request->draw;
		}else{
			$draw=1;
		}
		$sort = $request->order;
		$columns = $request->columns;
		$columnIndex = $sort[0]['column']; 
		$columnName = $columns[$columnIndex]['data']; 
		$columnSortOrder = $sort[0]['dir'];
		
		/* page hien tại */
		$cur_page = round($request->start/$request->length)+1;
		Paginator::currentPageResolver(function() use ($cur_page) {
			return $cur_page;
		});	
		$sql_data = tblServicesModel::select('tbl_services.*');
		if ($request->has('search') != '') {
			$r_query = $request->search;
			if (count($r_query) > 0) {
				if(isset($r_query['value'])){
					$q_search = $r_query['value'];
					$sql_data->where(function($query) use ($q_search) {
						$query->where('tbl_services.name', 'LIKE', '%' . $q_search . '%');
					}); 
				}
			}
		}		
		
		if ($request->filter_status != 'all' && $request->filter_status != '') {			
			$sql_data->where('tbl_services.status',$request->filter_status);
		}
		$data = $sql_data->orderBy($columnName,$columnSortOrder)->paginate($p_pages);
		$data_count = $data->total();
		$return =[];
		$list = [];
		if(count($data)>0){
			$number = $request->start +1;
			foreach($data as $item){
				if($item->status==1){
					$status = 'Hoạt động';
				}else if($item->status==2){
					$status = 'Đã xóa';
				}else{
					$status = 'Chờ';
				}
				
				
				$list[] = ['id'=>$item->id,'name'=>$item->name,'number'=>$number,'status'=>$status,'tstatus'=>$item->status
							,'created_at'=>date('d/m/Y',strtotime($item->created_at)),
							'url_view'=>'',
							'url_edit'=>route('edit-services',$item->id),
							'url_active'=>route('post-active-services',$item->id),
							'url_delete'=>route('post-delete-services',$item->id)];
				$number++;
			}
			
		}
		$return = ["draw"=>$draw,"recordsTotal"=>$data_count,"recordsFiltered"=>$data_count,"data"=>$list];
		return json_encode($return);
	}
	
	public function index(){
		
		return view('admin.services.view');
	}
	public function create(){	
		return view('admin.services.add');
	}
	public function store(Request $request){
		$rules=[
			'name' => 'required',
        ];
		$messages = [
			'required' => ' :attribute không được để trống',
		];
		$field=[
			'name'=> 'Tên',
		];
        $input_all = $request->all();		
		$validator = Validator::make($input_all, $rules, $messages, $field);
		if (!$validator->fails()) {			
			
			$tbl_seo = new tblSeoModel();
			$tbl_seo->seo_title = isset($input_all['seo_title']) ? $input_all['seo_title'] : $request->name;
			$tbl_seo->seo_description = isset($input_all['seo_description']) ? $input_all['seo_description'] : $request->description;
			$tbl_seo->seo_keyword = isset($input_all['seo_keyword']) ? $input_all['seo_keyword'] : '';
			$tbl_seo->fb_title = isset($input_all['fb_title']) ? $input_all['fb_title'] : $request->name;
			$tbl_seo->fb_description = isset($input_all['fb_description']) ? $input_all['fb_description'] : $request->description;
			$tbl_seo->fb_image = $request->fb_image;		
			$tbl_seo->save();
			
			$data = new tblServicesModel();			
				
			$data->name = $request->name;
			$data->content = $request->content;		
			$data->avatar = $request->avatar;	
			$check = tblServicesModel::where('slug',CommonModel::gen_slug($request->name))->first();
			if($check){
				$data->slug = CommonModel::gen_slug($request->name).'-'.rand(1,9);
			}else{
				$data->slug = CommonModel::gen_slug($request->name);
			}
			
			$data->seo_id = $tbl_seo->id;
			
			$data->save();	
			
			\Session::flash('admin_notify_success', 'Thêm thành công');
			return \Redirect::back();
		}else{
			return \Redirect::back()->withInput()->withErrors($validator->messages()->all('<li>:message</li>'));
		}
	}
	public function edit($id){
		$data = tblServicesModel::find($id);
		if($data){		
			$data_seo = tblSeoModel::where('id',$data->seo_id)->first();
			return view('admin.services.edit')->with('data_seo',$data_seo)->with('data',$data);
		}else{
			echo 404;
		}
	}
	public function update(Request $request){
		$rules=[
            'name' => 'required',
        ];
		$messages = [
			'required' => ' :attribute không được để trống',
		];
		$field=[
			'name'=> 'Tên',
			'password'=> 'Mật khẩu',
		];
        $input_all = $request->all();			
		$validator = Validator::make($input_all, $rules, $messages, $field);
		if (!$validator->fails()) {
			
			$data = tblServicesModel::find($request->id);
			$check_seo = tblSeoModel::find($data->seo_id);
			if($check_seo){
				$check_seo->seo_title = $request->seo_title;
				$check_seo->seo_description = $request->seo_description;
				$check_seo->seo_keyword = $request->seo_keyword;
				$check_seo->fb_title = $request->fb_title;
				$check_seo->fb_description = $request->fb_description;
				$check_seo->fb_image = $request->fb_image;						
				$check_seo->save();
			}else{
				$tbl_seo = new tblSeoModel();
				$tbl_seo->seo_title = $request->seo_title;
				$tbl_seo->seo_description = $request->seo_description;
				$tbl_seo->seo_keyword =$request->seo_keyword;
				$tbl_seo->fb_title = $request->fb_title;
				$tbl_seo->fb_description = $request->fb_description;
				$tbl_seo->fb_image = $request->fb_image;		
				$tbl_seo->save();
				
				$data->seo_id = $tbl_seo->id;
			}

			if($data->name != $request->name){
				$data->name = $request->name;
				$data->slug = CommonModel::gen_slug($request->name).'-'.rand(100,999);
			}
			
			$data->avatar = $request->avatar;			
			
			$data->content = $request->content;	
			
			$data->save();			
			
			\Session::flash('admin_notify_success', 'Cập nhật thành công');
			return \Redirect::back();
		}else{
			return \Redirect::back()->withInput()->withErrors($validator->messages()->all('<li>:message</li>'));
		}
	}
	public function active(Request $request,$id){
		tblServicesModel::where('id',$id)->update(['status'=>1]);
		
		return 'true';
	}
	public function remove(Request $request,$id){
		tblServicesModel::where('id',$id)->update(['status'=>2]);
		
		return 'true';
	}
	
}
