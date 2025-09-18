<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblSeoModel;
use App\Models\tblNewsCategoryModel;
use App\Models\CommonModel;
use HungCP\PhpSimpleHtmlDom\HtmlDomParser;
use App\Models\tblNewsModel;
use Validator;
class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	private $list_lang;
    private $d_lang;
	
	
    public function index()
    {
		
        $data = tblNewsCategoryModel::orderBy('position','asc')->get();		
        return view('admin.news.category.view')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_category = tblNewsCategoryModel::orderBy('position','asc')->get();		
        return view('admin.news.category.add')->with('all_category',$all_category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $all_input = $request->all();
		$action = $request->action;		
		if($request->name==''){			
			\Session::flash('admin_notify_success', 'Bạn chưa nhập tiêu đề');
			return \Redirect::back()->withInput();
		}else{			
			$tbl_seo = new tblSeoModel();
			$tbl_seo->seo_title = isset($all_input['seo_title']) ? $all_input['seo_title'] : $request->name;
			$tbl_seo->seo_description = isset($all_input['seo_description']) ? $all_input['seo_description'] : $request->description;
			$tbl_seo->seo_keyword = isset($all_input['seo_keyword']) ? $all_input['seo_keyword'] : '';
			$tbl_seo->fb_title = isset($all_input['fb_title']) ? $all_input['fb_title'] : $request->name;
			$tbl_seo->fb_description = isset($all_input['fb_description']) ? $all_input['fb_description'] : $request->description;
			$tbl_seo->fb_image = $request->fb_image;								
			$tbl_seo->save();
			$data = new tblNewsCategoryModel();
			$data->seo_id = $tbl_seo->id;
			$data->name = $request->name;
			$data->description = $request->description;
			$data->parent = 0;
			$check = tblNewsCategoryModel::where('slug',CommonModel::gen_slug($request->name))->first();			
			if($check){
				$data->slug = CommonModel::gen_slug($request->name) . '-' . rand(100,999);									
			}else{
				$data->slug = CommonModel::gen_slug($request->name);
			}
			$data->save();	
			\Cache::forget('category');
			\Session::flash('admin_notify_success', 'Thêm thành công');
			return \Redirect::back();
			
		}
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
        $data = tblNewsCategoryModel::find($id);	
		if($data){
			$data_seo = tblSeoModel::find($data->seo_id);				
			return view('admin.news.category.edit')->with('data',$data)->with('data_seo',$data_seo);
		}else{
			echo '0';
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
        $all_input = $request->all();
		if($request->name!=''){
			$data = tblNewsCategoryModel::find($id);
			if($data){
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
				}
				
				if($data->name != $request->name){	
					$data->slug = CommonModel::gen_slug($request->name) . '-' . rand(100,999);
					
					$data->name = $request->name;
				}	
				$data->description = $request->description;
				if(!$check_seo){
					$data->seo_id = $tbl_seo->id;
				}
				$data->save();				
			}
			\Cache::forget('category');
			\Session::flash('admin_notify_success', 'Cập nhật thành công');
			return \Redirect::back();
		}else{
			\Session::flash('admin_notify_success', 'Bạn chưa nhập tiêu đề');
			return \Redirect::back()->withInput();
		}
		
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
	public function delete_cate(Request $request) {
     
            $product_cate_con = tblNewsCategoryModel::where('parent', '=', $request->id)->get();
			if($product_cate_con){
				foreach ($product_cate_con as $item_delete) {
					$product_cate_con_con = tblNewsCategoryModel::where('parent', '=', $item_delete->id)->get();
					if($product_cate_con_con){
						foreach ($product_cate_con_con as $item_delete_con) {
							tblNewsCategoryModel::where('id', '=', $item_delete_con->id)->delete();
						}
					}
					tblNewsCategoryModel::where('id', '=', $item_delete->id)->delete();
				}
			}
            tblNewsCategoryModel::where('id', '=', $request->id)->delete();
        \Cache::forget('category');
    }



    public function update_cate(Request $request) {
        $data = json_decode($request->data);
        $count = 1;
		\Cache::forget('category');
        foreach ($data as $item) {
            $cate = tblNewsCategoryModel::find($item->id);
            $cate->parent=0;
            $cate->position=$count;
            $cate->save();
            if (isset($item->children)) {
                $data1 = $item->children;
                $count1 = 1;
                foreach ($data1 as $item1) {
                    $cate = tblNewsCategoryModel::find($item1->id);
                    $cate->parent=$item->id;
                    $cate->position=$count1;
                    $cate->save();
                    if (isset($item1->children)) {
                        $data2 = $item1->children;
                        $count2 = 1;
                        foreach ($data2 as $item2) {
                            $cate = tblNewsCategoryModel::find($item2->id);
                            $cate->parent=$item1->id;
                            $cate->position=$count2;
                            $cate->save();
                            $count2++;
                        }
                    }
                    $count1++;
                }
            }
            $count++;
        }
    }
	
}
