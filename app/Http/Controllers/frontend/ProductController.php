<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tblProductModel;
use App\Models\tblProductCategoryModel;
use App\Models\tblProductViewsModel;
use App\Models\tblBrandModel;
use App\Models\CommonModel;
use Validator;
use Illuminate\Pagination\Paginator;
class ProductController extends Controller
{
	public function product(){
		$data= tblProductModel::select('tbl_product.*')
					->where('tbl_product.status',1)->orderBy('tbl_product.created_at','desc')->paginate(40);
			
		$category = tblProductCategoryModel::where('status',1)->orderBy('position','asc')->get();
		return view('frontend.product.view')->with('data',$data)->with('category',$category)->with('action','view');
	}
	public function product_cate($slug=''){
		$check = tblProductCategoryModel::leftJoin('tbl_seo','tbl_product_category.seo_id','=','tbl_seo.id')
			->select('tbl_product_category.*','tbl_seo.seo_title as seotitle','tbl_seo.seo_description as seodesc','tbl_seo.seo_keyword as seokeyword','tbl_seo.fb_title as seofbtitle','tbl_seo.fb_description as seofbdesc','tbl_seo.fb_image as seofbimg','tbl_seo.g_title as seogtitle','tbl_seo.g_description as seogdesc','tbl_seo.g_image as seogimg')
			->where('tbl_product_category.slug',$slug)->where('tbl_product_category.status',1)->first();
		if($check){	
			$data= tblProductModel::leftJoin('tbl_product_views','tbl_product.id','=','tbl_product_views.product_id')
				->select(\DB::raw('MAX(tbl_product.created_at) as created_at'),\DB::raw('MAX(tbl_product.description) as description'),\DB::raw('MAX(tbl_product.name) as name'),\DB::raw('MAX(tbl_product.slug) as slug'),\DB::raw('MAX(tbl_product.avatar) as avatar'),\DB::raw('MAX(tbl_product.id) as id'),'tbl_product_views.product_id')
				->where('tbl_product.status',1)	
				->where('tbl_product_views.cat_id',$check->id)
				->groupBy('tbl_product_views.product_id')
				->paginate(40);
			$category = tblProductCategoryModel::where('status',1)->orderBy('position','asc')->get();
			return view('frontend.product.view')->with('check',$check)->with('slug',$check->id)->with('data',$data)->with('category',$category)->with('action','cate');
					
		}else{
			return redirect()->route('index');
		}
	}
	public function product_detail($slug=''){
		$data = tblProductModel::leftJoin('tbl_seo', 'tbl_product.seo_id', '=', 'tbl_seo.id')
					->select('tbl_product.*','tbl_seo.seo_title as seotitle','tbl_seo.seo_description as seodesc','tbl_seo.seo_keyword as seokeyword','tbl_seo.fb_title as seofbtitle','tbl_seo.fb_description as seofbdesc','tbl_seo.fb_image as seofbimg','tbl_seo.g_title as seogtitle','tbl_seo.g_description as seogdesc','tbl_seo.g_image as seogimg') 
					->where('tbl_product.status',1)
					->where('tbl_product.slug',$slug)
					->first();
		
		if($data){	
			
			$views = tblProductViewsModel::where('product_id',$data->id)->get();
			$list_id=[];
			if(count($views)>0){
				foreach($views as $item){
					$list_id[] = $item->cat_id;
				}
			}
			$relate= tblProductModel::leftJoin('tbl_product_views','tbl_product.id','=','tbl_product_views.product_id')
						->select(\DB::raw('MAX(tbl_product.created_at) as created_at'),\DB::raw('MAX(tbl_product.description) as description'),\DB::raw('MAX(tbl_product.name) as name'),\DB::raw('MAX(tbl_product.slug) as slug'),\DB::raw('MAX(tbl_product.avatar) as avatar'),\DB::raw('MAX(tbl_product.id) as id'),'tbl_product_views.product_id')
						->where('tbl_product.id','!=',$data->id)
						->where('tbl_product.status',1)	
						->whereIn('tbl_product_views.cat_id',$list_id)	
						->groupBy('tbl_product_views.product_id')
						->limit(4)->get();
			
			return view('frontend.product.detail')->with('data',$data)->with('relate',$relate);			
		}else{
			return redirect()->route('index');
		}
	}
	
	public function search($keyword='',$cate='',$brand_id=''){
		
		$category = tblProductCategoryModel::where('status',1)->orderBy('position','asc')->get();
		$brand = tblBrandModel::where('status',1)->orderBy('position','asc')->get();
		if($cate!='null'){
			$check_cate = tblProductCategoryModel::where('tbl_product_category.slug',$cate)->where('tbl_product_category.status',1)->first();
			if($check_cate){
				$data= tblProductModel::leftJoin('tbl_product_views','tbl_product.id','=','tbl_product_views.product_id')
					->select(\DB::raw('MAX(tbl_product.quick_tag) as quick_tag'),\DB::raw('MAX(tbl_product.pprice) as pprice'),\DB::raw('MAX(tbl_product.brand_id) as brand_id'),\DB::raw('MAX(tbl_product.name) as name'),\DB::raw('MAX(tbl_product.slug) as slug'),\DB::raw('MAX(tbl_product.avatar) as avatar'),\DB::raw('MAX(tbl_product.id) as id'),\DB::raw('MAX(tbl_product.price) as price'),'tbl_product_views.product_id')
					->where('tbl_product.status',1)	
					->where('tbl_product_views.cat_id',$check_cate->id);
					if($brand_id!='null'){
						$data->where('tbl_product.brand_id',$brand_id);
					}
					if($keyword!='null' && $keyword!=''){
						$data->where(function($query) use ($keyword) {
							$query->where('tbl_product.name', 'LIKE', '%' . $keyword . '%');
						}); 
					}	
				$return =$data->orderBy('tbl_product.created_at','desc')
					->groupBy('tbl_product_views.product_id')
					->paginate(40);
			}else{
				$return=[];
			}
		}else{
			$data= tblProductModel::select('tbl_product.*');
				if($brand_id!='null'){
					$data->where('tbl_product.brand_id',$brand_id);
				}
				if($keyword!='null' && $keyword!=''){
					$data->where(function($query) use ($keyword) {
						$query->where('tbl_product.name', 'LIKE', '%' . $keyword . '%');
					}); 
				}	
			$return =$data->where('tbl_product.status',1)->orderBy('tbl_product.created_at','desc')->paginate(8);
		}
		if($keyword!='null'){
			$check = tblKeywordModel::where('name',$keyword)->first();
			if($check){
				$times = $check->times;
				$check->times = $times+1;
				$check->save();
			}else{
				$keyw = new tblKeywordModel();
				$keyw->name = $keyword;
				$keyw->times =1;
				$keyw->save();
			}
		}
		return view('frontend.product.view')->with('category',$category)->with('keyword',$keyword)->with('cate',$cate)->with('brand',$brand)->with('data',$return)->with('brand_id',$brand_id);
	}
	public function psearch(Request $request){
		if($request->brand_id!=''){
            $brand_id = $request->brand_id;
        }else{
            $brand_id = 'null';
        }
		if($request->cate!=''){
            $cate = $request->cate;
        }else{
            $cate = 'null';
        }		
		if($request->keyword!=''){
            $keyword = $request->keyword;
        }else{
            $keyword = 'null';
        }	
		return redirect()->route('search',array($keyword,$cate,$brand_id));
	}
}
