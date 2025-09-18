<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblContactModel;
use App\Models\CommonModel;
use Validator;
use Illuminate\Pagination\Paginator;
class ContactController extends Controller {
	
	
	
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
		$sql_data = tblContactModel::select('tbl_contact.*');
		if ($request->has('search') != '') {
			$r_query = $request->search;
			if (count($r_query) > 0) {
				if(isset($r_query['value'])){
					$q_search = $r_query['value'];
					$sql_data->where(function($query) use ($q_search) {
						$query->where('tbl_contact.email', 'LIKE', '%' . $q_search . '%')->orWhere('tbl_contact.name', 'LIKE', '%' . $q_search . '%')->orWhere('tbl_contact.phone', 'LIKE', '%' . $q_search . '%')->orWhere('tbl_contact.content', 'LIKE', '%' . $q_search . '%');
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
				$list[] = ['id'=>$item->id,'name'=>$item->name,'email'=>$item->email,'phone'=>$item->phone,'content'=>$item->content,'number'=>$number
							,'created_at'=>date('d/m/Y',strtotime($item->created_at)),
							'url_view'=>'',
							'url_edit'=>'',
							'url_active'=>'',
							'url_delete'=>route('post-delete-contact',$item->id)];
				$number++;
			}
			
		}
		$return = ["draw"=>$draw,"recordsTotal"=>$data_count,"recordsFiltered"=>$data_count,"data"=>$list];
		return json_encode($return);
	}
	public function index(){
		return view('admin.contact.view');
	}
	public function create(){
		
	}
	public function store(Request $request){		
      
	}
	public function edit($id){
		
	}
	public function update(Request $request){
     
	}
	public function active(Request $request,$id){
		
	}
	public function remove(Request $request,$id){
		
		tblContactModel::where('id',$id)->delete();
		return 'true';
	}
}
