<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tblProjectModel;
use App\Models\tblProductModel;
use App\Models\CommonModel;
use Validator;
use Illuminate\Pagination\Paginator;
class ProjectController extends Controller
{
	public function view(){
		$data= tblProjectModel::select('tbl_project.*')
					->where('tbl_project.status',1)->orderBy('tbl_project.created_at','desc')->get();
		return view('frontend.project.view')->with('data',$data);
	}
	public function detail($slug=''){
		$data = tblProjectModel::leftJoin('tbl_seo', 'tbl_project.seo_id', '=', 'tbl_seo.id')
					->select('tbl_project.*','tbl_seo.seo_title as seotitle','tbl_seo.seo_description as seodesc','tbl_seo.seo_keyword as seokeyword','tbl_seo.fb_title as seofbtitle','tbl_seo.fb_description as seofbdesc','tbl_seo.fb_image as seofbimg','tbl_seo.g_title as seogtitle','tbl_seo.g_description as seogdesc','tbl_seo.g_image as seogimg') 
					->where('tbl_project.status',1)
					->where('tbl_project.slug',$slug)
					->first();
		
		if($data){				
			$product= tblProductModel::whereIn('id',explode(',',$data->list_p))->where('status',1)->orderBy('created_at','desc')->get();
			
			return view('frontend.project.detail')->with('data',$data)->with('product',$product);			
		}else{
			return redirect()->route('index');
		}
	}
	
}
