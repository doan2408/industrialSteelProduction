<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tblCustomerModel;
use App\Models\tblDepartmentModel;
use App\Models\tblSlideModel;
use App\Models\tblProductModel;
use App\Models\tblProductCategoryModel;
use App\Models\tblServicesModel;
use App\Models\tblProjectModel;
use App\Models\tblBrandModel;
use App\Models\tblPageModel;
use App\Models\tblNewsModel;
use App\Models\tblTimelineModel;
use App\Models\CommonModel;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Validator;
use Illuminate\Pagination\Paginator;
class HomeController extends Controller
{
	private $lang_code = '';
	public function __construct() {
		
        
	}	
	public function page($slug=''){
		$data = tblPageModel::leftJoin('tbl_seo', 'tbl_page.seo_id', '=', 'tbl_seo.id')
					->select('tbl_page.*','tbl_seo.seo_title as seotitle','tbl_seo.seo_description as seodesc','tbl_seo.seo_keyword as seokeyword','tbl_seo.fb_title as seofbtitle','tbl_seo.fb_description as seofbdesc','tbl_seo.fb_image as seofbimg','tbl_seo.g_title as seogtitle','tbl_seo.g_description as seogdesc','tbl_seo.g_image as seogimg') 
					->where('tbl_page.status',1)						
					->where('tbl_page.slug',$slug)
					->first();
		if($data){
			return view('frontend.page')->with('data',$data);
		}else{
			return redirect()->route('index');
		}
	}
	public function services($slug=''){
		$data = tblServicesModel::where('slug',$slug)->where('status',1)->first();
		if($data){
			return view('frontend.services')->with('data',$data);
		}else{
			return redirect()->route('index');
		}
	}
	public function index(){		
		$product = tblProductModel::where('status',1)->limit(8)->get();
		$services = tblServicesModel::where('status',1)->get();
		$project = tblProjectModel::where('status',1)->limit(10)->get();
		$brand = tblBrandModel::where('status',1)->get();
		$customer = tblCustomerModel::where('status',1)->get();
		$news = tblNewsModel::leftJoin('tbl_users','tbl_news.user_id','=','tbl_users.id')
							->select('tbl_news.*','tbl_users.name as uname')
							->where('tbl_news.status',1)->where('tbl_news.timepost','<=',time())->get();
		return view('frontend.index')->with('product',$product)->with('services',$services)->with('project',$project)->with('brand',$brand)->with('customer',$customer)->with('news',$news);
	}
	public function contact(){		
		$data = tblDepartmentModel::where('status',1)->orderBy('id','asc')->get();
		return view('frontend.contact')->with('data',$data);
	}
	public function about(){		
		$product = tblProductModel::where('status',1)->orderBy('created_at','desc')->limit(8)->get();
		$timeline = tblTimelineModel::orderBy('year','asc')->get();
		return view('frontend.about')->with('timeline',$timeline)->with('product',$product);
	}
}
