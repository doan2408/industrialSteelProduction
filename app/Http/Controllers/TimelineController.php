<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommonModel;
use App\Models\tblTimelineModel;
use Validator;
use Illuminate\Pagination\Paginator;
class TimelineController extends Controller {
	
	
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
		$sql_data = tblTimelineModel::select('tbl_timeline.*');
		if ($request->has('search') != '') {
			$r_query = $request->search;
			if (count($r_query) > 0) {
				if(isset($r_query['value'])){
					$q_search = $r_query['value'];
					$sql_data->where(function($query) use ($q_search) {
						$query->where('tbl_timeline.name', 'LIKE', '%' . $q_search . '%');
					}); 
				}
			}
		}	
		$data = $sql_data->orderBy($columnName,$columnSortOrder)->paginate($p_pages);
		$data_count = $data->total();
		$return =[];
		$list = [];
		if(count($data)>0){
			$number = $request->start +1;
			foreach($data as $item){
				
				$list[] = ['id'=>$item->id,'name'=>$item->name,'number'=>$number
							,'created_at'=>date('d/m/Y',strtotime($item->created_at)),
							'url_view'=>'',
							'url_edit'=>route('edit-timeline',$item->id),
							'url_active'=>'',
							'url_delete'=>route('post-delete-timeline',$item->id)];
				$number++;
			}
			
		}
		$return = ["draw"=>$draw,"recordsTotal"=>$data_count,"recordsFiltered"=>$data_count,"data"=>$list];
		return json_encode($return);
	}
	public function index(){
		return view('admin.timeline.view');
	}
	public function create(){
		return view('admin.timeline.add');
	}
	public function store(Request $request){
		$rules=[
            'name' => 'required',
        ];
		$messages = [
			'required' => ' :attribute không được để trống',
		];
		$field=[
			'name'=> 'Tiêu đề',
		];
        $input_all = $request->all();
		$action = $request->action;				
		$validator = Validator::make($input_all, $rules, $messages, $field);
		if (!$validator->fails()) {
			$data = new tblTimelineModel();
			$data->name = $request->name;
			$data->content = $request->content;	
			$data->year = strtotime(\Datetime::createFromFormat('d/m/Y', $request->year)->format('Y-m-d'));
			$data->save();
			\Session::flash('admin_notify_success', 'Thêm thành công');
			return \Redirect::back();
		}else{
			return \Redirect::back()->withInput()->withErrors($validator->messages()->all('<li>:message</li>'));
		}
	}
	public function edit($id){
		$data = tblTimelineModel::find($id);
		if($data){
			return view('admin.timeline.edit')->with('data',$data);
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
			'name'=> 'Tiêu đề',
			'content'=> 'Nội dung',
		];
        $input_all = $request->all();
		$action = $request->action;				
		$validator = Validator::make($input_all, $rules, $messages, $field);
		if (!$validator->fails()) {
			$data = tblTimelineModel::find($request->id);
			$data->name = $request->name;
			$data->content = $request->content;	
			$data->year = strtotime(\Datetime::createFromFormat('d/m/Y', $request->year)->format('Y-m-d'));
			$data->save();
			\Session::flash('admin_notify_success', 'Cập nhật thành công');
			return \Redirect::back();
		}else{
			return \Redirect::back()->withInput()->withErrors($validator->messages()->all('<li>:message</li>'));
		}
	}
	public function active(Request $request,$id){
		
	}
	public function remove(Request $request,$id){
		tblTimelineModel::where('id',$id)->delete();
		return 'true';
	}
	
}
