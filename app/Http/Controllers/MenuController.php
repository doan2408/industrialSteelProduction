<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblMenuModel;
use App\Models\tblMenuGroupModel;
use App\Models\CommonModel;
use App\Models\tblPageModel;
use App\Models\tblNewsCategoryModel;
use App\Models\tblProductCategoryModel;
use App\Models\tblProductModel;
use App\Models\tblServicesModel;
use Validator;
use Illuminate\Pagination\Paginator;
class MenuController extends Controller
{
    private $list_lang;
    private $d_lang;
	
	public function __construct() {
		
	}
    public function data(Request $request) {
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
		
		$cur_page = round($request->start/$request->length)+1;
		Paginator::currentPageResolver(function() use ($cur_page) {
			return $cur_page;
		});	
		$sql_data = tblMenuGroupModel::select('*');
		$sql_data_count = tblMenuGroupModel::select('*');
		if ($request->has('search') != '') {
			$r_query = $request->search;
			if (count($r_query) > 0) {
				if(isset($r_query['value'])){
					$q_search = $r_query['value'];
					$sql_data->where(function($query) use ($q_search) {
						$query->where('tbl_menu_group.name', 'LIKE', '%' . $q_search . '%');
					}); 
					$sql_data_count->where(function($query) use ($q_search) {
						$query->where('tbl_menu_group.name', 'LIKE', '%' . $q_search . '%');
					}); 
				}
			}
		}		
		$data = $sql_data->orderBy($columnName,$columnSortOrder)->paginate($p_pages);
		$data_count = $sql_data_count->count();
		
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
				$list[] = ['id'=>$item->id,'name'=>$item->name,'number'=>$number
							,'created_at'=>date('d/m/Y',strtotime($item->created_at)),
							'url_view'=>'',
							'url_edit'=>route('edit-menu',$item->id),
							'url_active'=>route('post-active-news',$item->id),
							'url_delete'=>route('post-delete-menu',$item->id)];
				$number++;
			}
			
		}
		$return = ["draw"=>$draw,"recordsTotal"=>$data_count,"recordsFiltered"=>$data_count,"data"=>$list];
		return json_encode($return);
    }
	public function quick_group(Request $request){
		$out_put='';
		$all_input = $request->all();
		
		if ($request->name_modal=='') {		
			$out_put = array(
				'check' =>'0',
				'content' => 'Bạn chưa nhập tiêu đề'
			);
			$return_output = json_encode($out_put);			
		}else{
			$data = new tblMenuGroupModel();
			$data->name = $request->name_modal;
			$data->save();			
			$out_put = array(
				'check' =>'reload',
				'content' => 'Thêm dữ liệu thành công'
			);
			$return_output = json_encode($out_put);
		}
		echo $return_output;
	}
    public function index()
    {
        $data = tblMenuGroupModel::orderBy('created_at','desc')->get();		
        return view('admin.menu.view')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = tblMenuGroupModel::find($id);
		if($data){
			$menu = tblMenuModel::where('group_id',$id)->orderBy('position','asc')->get();		
			$cate = tblNewsCategoryModel::orderBy('position','asc')->get();
			$pcate = tblProductCategoryModel::orderBy('position','asc')->get();
			$services = tblServicesModel::where('status',1)->get();
			$page = tblPageModel::where('status',1)->get();
			return view('admin.menu.edit')->with('data',$data)->with('menu',$menu)->with('cate',$cate)->with('services',$services)->with('pcate',$pcate)->with('page',$page);
		}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	public function remove(Request $request, $id){
		tblMenuGroupModel::where('id',$id)->delete();
		return 'true';
	}
	public function add_child(Request $request) {
		if($request->name!=''){
			if ($request->has('menu_id_edit') && $request->menu_id_edit!='') {
				$tbl_menu = tblMenuModel::where('group_id', $request->group_id)->where('id', $request->menu_id_edit)->first();
				if($tbl_menu){
					\Cache::forget('main_menu'.$request->group_id);
					\Cache::forget('footer_menu3'.$request->group_id);
					\Cache::forget('footer_menu1'.$request->group_id);
					\Cache::forget('footer_menu2'.$request->group_id);
					$tbl_menu->name = $request->name;
					$tbl_menu->url = $request->url;
					
					$tbl_menu->save();
					$menu = tblMenuModel::where('group_id',$tbl_menu->id)->orderBy('position','asc')->get();
					$out_put = array(
						'check' => 1,
						'content' => view('admin.menu.ajax')->with('menu',$menu)->render()
					);
					echo json_encode($out_put);
				}
			} else {	
				\Cache::forget('main_menu'.$request->group_id);
					\Cache::forget('footer_menu3'.$request->group_id);
					\Cache::forget('footer_menu1'.$request->group_id);
					\Cache::forget('footer_menu2'.$request->group_id);
				$count = tblMenuModel::where('group_id', $request->group_id)->where('parent_id', 0)->count();
				$tbl_menu = new tblMenuModel();
				$tbl_menu->parent_id = 0;
				$tbl_menu->name = $request->name;
				$tbl_menu->url = $request->url;
				$tbl_menu->position = $count + 1;
				$tbl_menu->group_id = $request->group_id;
				
				$tbl_menu->save();
				$menu = tblMenuModel::where('group_id',$tbl_menu->id)->orderBy('position','asc')->get();
				$out_put = array(
					'check' => 1,
					'content' => view('admin.menu.ajax')->with('menu',$menu)->render()
				);
				echo json_encode($out_put);
				
			}
		}else{
			$out_put = array(
				'check' => 0,
				'content' => 'Bạn chưa nhập tiêu đề'
			);
			echo json_encode($out_put);
		}
        
    }

    public function update_child(Request $request) {       
		$all_input = $request->all();
		$group_id = $request->group_id;
		$data = json_decode($request->data);
		$count = 1;
		\Cache::forget('main_menu'.$request->group_id);
		\Cache::forget('footer_menu3'.$request->group_id);
		\Cache::forget('footer_menu1'.$request->group_id);
		\Cache::forget('footer_menu2'.$request->group_id);
		foreach ($data as $item) {
			$tbl_menu = tblMenuModel::find($item->id);
			$tbl_menu->parent_id = 0;
			$tbl_menu->position = $count;
			$tbl_menu->save();
			if (isset($item->children)) {
				$data1 = $item->children;
				$count1 = 1;
				foreach ($data1 as $item1) {
					$tbl_menu = tblMenuModel::find($item1->id);
					$tbl_menu->parent_id = $item->id;
					$tbl_menu->position = $count1;
					$tbl_menu->save();
					if (isset($item1->children)) {
						$data2 = $item1->children;
						$count2 = 1;
						foreach ($data2 as $item2) {
							$tbl_menu = tblMenuModel::find($item2->id);
							$tbl_menu->parent_id = $item1->id;
							$tbl_menu->position = $count2;
							$tbl_menu->save();
							$count2++;
						}
					}
					$count1++;
				}
			}
			$count++;
		}
        
    }

    public function delete_child(Request $request) {
		\Cache::forget('main_menu'.$request->group_id);
					\Cache::forget('footer_menu3'.$request->group_id);
					\Cache::forget('footer_menu1'.$request->group_id);
					\Cache::forget('footer_menu2'.$request->group_id);
		tblMenuModel::find($request->id)->delete();
		tblMenuModel::where('parent_id', $request->id)->delete();
		return 'true';        
    }
	
	public function rename_group(Request $request) {  
		\Cache::forget('main_menu'.$request->group_id);
					\Cache::forget('footer_menu3'.$request->group_id);
					\Cache::forget('footer_menu1'.$request->group_id);
					\Cache::forget('footer_menu2'.$request->group_id);
		$tbl_menu_group = tblMenuGroupModel::find($request->id);
		$tbl_menu_group->name = $request->name;
		$tbl_menu_group->save();
        return 'true';
    }
	
	public function view_ajax($id){
		$menu = tblMenuModel::where('group_id',$id)->orderBy('position','asc')->get();
		return view('admin.menu.ajax')->with('menu',$menu);
	}
}
