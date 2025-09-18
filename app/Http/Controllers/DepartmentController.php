<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblDepartmentModel;
use App\Models\CommonModel;
use Validator;
use Illuminate\Pagination\Paginator;
class DepartmentController extends Controller {
	
	
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
		$sql_data = tblDepartmentModel::select('tbl_department.*');
		if ($request->has('search') != '') {
			$r_query = $request->search;
			if (count($r_query) > 0) {
				if(isset($r_query['value'])){
					$q_search = $r_query['value'];
					$sql_data->where(function($query) use ($q_search) {
						$query->where('tbl_department.name', 'LIKE', '%' . $q_search . '%');
					}); 
				}
			}
		}		
		
		if ($request->filter_status != 'all' && $request->filter_status != '') {			
			$sql_data->where('tbl_department.status',$request->filter_status);
		}else{
			$sql_data->where('tbl_department.status',1);
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
							'url_edit'=>route('edit-department',$item->id),
							'url_active'=>route('post-active-department',$item->id),
							'url_delete'=>route('post-delete-department',$item->id)];
				$number++;
			}
			
		}
		$return = ["draw"=>$draw,"recordsTotal"=>$data_count,"recordsFiltered"=>$data_count,"data"=>$list];
		return json_encode($return);
	}
	public function index(){
		
		return view('admin.department.view');
	}
	public function create(){	
		return view('admin.department.add');
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
			
			$data = new tblDepartmentModel();
			
			$data->name = $request->name;
			$data->phone = $request->phone;	
			$data->save();
			\Session::flash('admin_notify_success', 'Thêm thành công');
			return \Redirect::back();
		}else{
			return \Redirect::back()->withInput()->withErrors($validator->messages()->all('<li>:message</li>'));
		}
	}
	public function edit($id){
		$data = tblDepartmentModel::find($id);
		if($data){		
			return view('admin.department.edit')->with('data',$data);
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
		];
        $input_all = $request->all();			
		$validator = Validator::make($input_all, $rules, $messages, $field);
		if (!$validator->fails()) {
			$data = tblDepartmentModel::find($request->id);
			$data->name = $request->name;
			$data->phone = $request->phone;		
			$data->save();
			
			\Session::flash('admin_notify_success', 'Cập nhật thành công');
			return \Redirect::back();
		}else{
			return \Redirect::back()->withInput()->withErrors($validator->messages()->all('<li>:message</li>'));
		}
	}
	public function active(Request $request,$id){
		tblDepartmentModel::where('id',$id)->update(['status'=>1]);
		return 'true';
	}
	public function remove(Request $request,$id){
		tblDepartmentModel::where('id',$id)->update(['status'=>2]);
		return 'true';
	}
	
}
