<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tblNewsModel;
use App\Models\tblNewsCategoryModel;
use App\Models\tblTagsViewsModel;
use App\Models\tblTagsModel;
use App\Models\tblCommentModel;
use App\Models\CommonModel;
use App\Models\User;
use Validator;
use Illuminate\Pagination\Paginator;
class NewsController extends Controller
{
	private $lang_code = '';
	public function __construct() {
		
        
	}
	
	public function relate($id){
		$list_tag = tblTagsViewsModel::leftJoin('tbl_tags','tbl_tags_views.tags_id','=','tbl_tags.id')
					->where('tbl_tags_views.type',1)
					->where('tbl_tags_views.post_id',$id)
					->get();
		$arr=[];
		$list_relate=[];
		$list_data=[];
		if(count($list_tag)>0){
			foreach($list_tag as $item){
				$arr[] = $item->tags_id;
			}
			
		}
		if(count($arr)>0){
			$list_relate = tblTagsViewsModel::whereIn('tags_id',$arr)
							->select('tbl_tags_views.post_id')
							->where('type',1)
							->where('post_id','!=',$id)
							->groupBy('post_id')
							->limit(5)->get();		
		}
		if(count($list_relate)>0){
			$id_relate=[];
			foreach($list_relate as $i_r){
				$id_relate[] = $i_r->post_id;
			}
			$list_data =  tblNewsModel::leftJoin('tbl_users','tbl_news.user_id','=','tbl_users.id')
							->select('tbl_news.*','tbl_users.name as uname')
							->where('tbl_news.status',1)
							->whereIn('tbl_news.id',$id_relate)
							->orderBy('tbl_news.timepost','desc')
							->get();
		}
		return $list_data;
	}
	public function news(){
		$data= tblNewsModel::leftJoin('tbl_users','tbl_news.user_id','=','tbl_users.id')
							->select('tbl_news.*','tbl_users.name as uname')
					->where('tbl_news.status',1)->where('tbl_news.timepost','<=',time())->orderBy('tbl_news.timepost','desc')->paginate(12);		
		
		$category = tblNewsCategoryModel::where('parent',0)->orderBy('position','asc')->get();
		
		return view('frontend.news.view')->with('data',$data)->with('category',$category);
	}
	public function news_cate($slug=''){
		$check = tblNewsCategoryModel::leftJoin('tbl_seo','tbl_news_category.seo_id','=','tbl_seo.id')
			->select('tbl_news_category.*','tbl_seo.seo_title as seotitle','tbl_seo.seo_description as seodesc','tbl_seo.seo_keyword as seokeyword','tbl_seo.fb_title as seofbtitle','tbl_seo.fb_description as seofbdesc','tbl_seo.fb_image as seofbimg','tbl_seo.g_title as seogtitle','tbl_seo.g_description as seogdesc','tbl_seo.g_image as seogimg')
			->where('tbl_news_category.slug',$slug)->first();
		if($check){		
			$data= tblNewsModel::leftJoin('tbl_users','tbl_news.user_id','=','tbl_users.id')
							->select('tbl_news.*','tbl_users.name as uname')
							->where('tbl_news.status',1)
							->where('tbl_news.timepost','<=',time())
							->where('tbl_news.cate_id',$check->id)
							->orderBy('tbl_news.timepost','desc')
							->paginate(12);
			$category = tblNewsCategoryModel::where('parent',0)->orderBy('position','asc')->get();
			return view('frontend.news.view')->with('data',$data)->with('check',$check)->with('category',$category);
		}else{
			echo 404;
		}
	}
	public function news_tag($slug=''){
		$list_id = tblTagsViewsModel::leftJoin('tbl_tags','tbl_tags_views.tags_id','=','tbl_tags.id')
                            ->where('tbl_tags_views.type',1)
                            ->where('tbl_tags.slug',$slug)
                            ->get();
		$data=[];
		if(count($list_id)>0){
			$arr=[];
            foreach($list_id as $item){
                $arr[] = $item->post_id;
            }
			$data = tblNewsModel::leftJoin('tbl_users','tbl_news.user_id','=','tbl_users.id')
							->select('tbl_news.*','tbl_users.name as uname')
						->where('tbl_news.status',1)
						->whereIn('tbl_news.id',$arr)
						->orderBy('tbl_news.timepost','desc')							
						->paginate(12);
        }
		$category = tblNewsCategoryModel::where('parent',0)->orderBy('position','asc')->get();
		return view('frontend.news.view')->with('data',$data)->with('category',$category);
	}
	public function news_detail($slug=''){
		$data = tblNewsModel::leftJoin('tbl_seo', 'tbl_news.seo_id', '=', 'tbl_seo.id')
					->leftJoin('tbl_users','tbl_news.user_id','=','tbl_users.id')
					->select('tbl_news.*','tbl_users.name as uname','tbl_seo.seo_title as seotitle','tbl_seo.seo_description as seodesc','tbl_seo.seo_keyword as seokeyword','tbl_seo.fb_title as seofbtitle','tbl_seo.fb_description as seofbdesc','tbl_seo.fb_image as seofbimg','tbl_seo.g_title as seogtitle','tbl_seo.g_description as seogdesc','tbl_seo.g_image as seogimg') 
					->where('tbl_news.status',1)
					->where('tbl_news.timepost','<=',time())
					->where('tbl_news.slug',$slug)
					->first();
		
		if($data){		
			$relate = $this->relate($data->id);
			$tags = tblTagsViewsModel::leftJoin('tbl_tags','tbl_tags_views.tags_id','=','tbl_tags.id')
                            ->where('tbl_tags_views.type',1)
                            ->where('tbl_tags_views.post_id',$data->id)
                            ->get();
			$views = $data->views;
			$data->views = $views+1;
			$data->save();
			$author = User::find($data->user_id);
			$cate = tblNewsCategoryModel::find($data->cate_id);
			return view('frontend.news.detail')->with('cate',$cate)->with('author',$author)->with('data',$data)->with('tags',$tags)->with('relate',$relate);
		}else{
			return redirect()->route('index');
		}
	}
	public function amp_news_detail($slug=''){
		$data = tblNewsModel::leftJoin('tbl_seo', 'tbl_news.seo_id', '=', 'tbl_seo.id')
					->leftJoin('tbl_news_category','tbl_news.cate_id','=','tbl_news_category.id')
					->select('tbl_news.*','tbl_news_category.name as cname','tbl_news_category.slug as cslug','tbl_seo.seo_title as seotitle','tbl_seo.seo_description as seodesc','tbl_seo.seo_keyword as seokeyword','tbl_seo.fb_title as seofbtitle','tbl_seo.fb_description as seofbdesc','tbl_seo.fb_image as seofbimg','tbl_seo.g_title as seogtitle','tbl_seo.g_description as seogdesc','tbl_seo.g_image as seogimg') 
					->where('tbl_news.status',1)
					->where('tbl_news.timepost','<=',time())
					->where('tbl_news.slug',$slug)
					->first();
		
		if($data){		
			$relate = $this->relate($data->id);
			$tags = tblTagsViewsModel::leftJoin('tbl_tags','tbl_tags_views.tags_id','=','tbl_tags.id')
                            ->where('tbl_tags_views.type',1)
                            ->where('tbl_tags_views.post_id',$data->id)
                            ->get();
			$views = $data->views;
			$data->views = $views+1;
			$data->save();
			$author = User::find($data->user_id);
			$cate = tblNewsCategoryModel::find($data->cate_id);
			return view('frontend.amp.index')->with('cate',$cate)->with('author',$author)->with('data',$data)->with('tags',$tags)->with('relate',$relate);
		}else{
			return redirect()->route('news');
		}
	}
}
