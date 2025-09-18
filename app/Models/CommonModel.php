<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CommonModel;
use App\Models\tblSettingModel;
use App\Models\tblWeatherCityModel;
use App\Models\tblProductCategoryModel;
use App\Models\tblProductModel;
use App\Models\tblPriceBookModel;
use App\Models\tblProductPriceModel;
use App\Models\User;
use voku\helper\HtmlDomParser;
use App\Models\tblLangModel;

class CommonModel extends Model
{
	public static function country_code(){
		$list='[{"country":"Afghanistan","code":"93","iso":"AF"},
				{"country":"Albania","code":"355","iso":"AL"},
				{"country":"Algeria","code":"213","iso":"DZ"},
				{"country":"American Samoa","code":"1-684","iso":"AS"},
				{"country":"Andorra","code":"376","iso":"AD"},
				{"country":"Angola","code":"244","iso":"AO"},
				{"country":"Anguilla","code":"1-264","iso":"AI"},
				{"country":"Antarctica","code":"672","iso":"AQ"},
				{"country":"Antigua and Barbuda","code":"1-268","iso":"AG"},
				{"country":"Argentina","code":"54","iso":"AR"},
				{"country":"Armenia","code":"374","iso":"AM"},
				{"country":"Aruba","code":"297","iso":"AW"},
				{"country":"Australia","code":"61","iso":"AU"},
				{"country":"Austria","code":"43","iso":"AT"},
				{"country":"Azerbaijan","code":"994","iso":"AZ"},
				{"country":"Bahamas","code":"1-242","iso":"BS"},
				{"country":"Bahrain","code":"973","iso":"BH"},
				{"country":"Bangladesh","code":"880","iso":"BD"},
				{"country":"Barbados","code":"1-246","iso":"BB"},
				{"country":"Belarus","code":"375","iso":"BY"},
				{"country":"Belgium","code":"32","iso":"BE"},
				{"country":"Belize","code":"501","iso":"BZ"},
				{"country":"Benin","code":"229","iso":"BJ"},
				{"country":"Bermuda","code":"1-441","iso":"BM"},
				{"country":"Bhutan","code":"975","iso":"BT"},
				{"country":"Bolivia","code":"591","iso":"BO"},
				{"country":"Bosnia and Herzegovina","code":"387","iso":"BA"},
				{"country":"Botswana","code":"267","iso":"BW"},
				{"country":"Brazil","code":"55","iso":"BR"},
				{"country":"British Indian Ocean Territory","code":"246","iso":"IO"},
				{"country":"British Virgin Islands","code":"1-284","iso":"VG"},
				{"country":"Brunei","code":"673","iso":"BN"},
				{"country":"Bulgaria","code":"359","iso":"BG"},
				{"country":"Burkina Faso","code":"226","iso":"BF"},
				{"country":"Burundi","code":"257","iso":"BI"},
				{"country":"Cambodia","code":"855","iso":"KH"},
				{"country":"Cameroon","code":"237","iso":"CM"},
				{"country":"Canada","code":"1","iso":"CA"},
				{"country":"Cape Verde","code":"238","iso":"CV"},
				{"country":"Cayman Islands","code":"1-345","iso":"KY"},
				{"country":"Central African Republic","code":"236","iso":"CF"},
				{"country":"Chad","code":"235","iso":"TD"},
				{"country":"Chile","code":"56","iso":"CL"},
				{"country":"China","code":"86","iso":"CN"},
				{"country":"Christmas Island","code":"61","iso":"CX"},
				{"country":"Cocos Islands","code":"61","iso":"CC"},
				{"country":"Colombia","code":"57","iso":"CO"},
				{"country":"Comoros","code":"269","iso":"KM"},
				{"country":"Cook Islands","code":"682","iso":"CK"},
				{"country":"Costa Rica","code":"506","iso":"CR"},
				{"country":"Croatia","code":"385","iso":"HR"},
				{"country":"Cuba","code":"53","iso":"CU"},
				{"country":"Curacao","code":"599","iso":"CW"},
				{"country":"Cyprus","code":"357","iso":"CY"},
				{"country":"Czech Republic","code":"420","iso":"CZ"},
				{"country":"Democratic Republic of the Congo","code":"243","iso":"CD"},
				{"country":"Denmark","code":"45","iso":"DK"},
				{"country":"Djibouti","code":"253","iso":"DJ"},
				{"country":"Dominica","code":"1-767","iso":"DM"},
				{"country":"Dominican Republic","code":"1-809, 1-829, 1-849","iso":"DO"},
				{"country":"East Timor","code":"670","iso":"TL"},
				{"country":"Ecuador","code":"593","iso":"EC"},
				{"country":"Egypt","code":"20","iso":"EG"},
				{"country":"El Salvador","code":"503","iso":"SV"},
				{"country":"Equatorial Guinea","code":"240","iso":"GQ"},
				{"country":"Eritrea","code":"291","iso":"ER"},
				{"country":"Estonia","code":"372","iso":"EE"},
				{"country":"Ethiopia","code":"251","iso":"ET"},
				{"country":"Falkland Islands","code":"500","iso":"FK"},
				{"country":"Faroe Islands","code":"298","iso":"FO"},
				{"country":"Fiji","code":"679","iso":"FJ"},
				{"country":"Finland","code":"358","iso":"FI"},
				{"country":"France","code":"33","iso":"FR"},
				{"country":"French Polynesia","code":"689","iso":"PF"},
				{"country":"Gabon","code":"241","iso":"GA"},
				{"country":"Gambia","code":"220","iso":"GM"},
				{"country":"Georgia","code":"995","iso":"GE"},
				{"country":"Germany","code":"49","iso":"DE"},
				{"country":"Ghana","code":"233","iso":"GH"},
				{"country":"Gibraltar","code":"350","iso":"GI"},
				{"country":"Greece","code":"30","iso":"GR"},
				{"country":"Greenland","code":"299","iso":"GL"},
				{"country":"Grenada","code":"1-473","iso":"GD"},
				{"country":"Guam","code":"1-671","iso":"GU"},
				{"country":"Guatemala","code":"502","iso":"GT"},
				{"country":"Guernsey","code":"44-1481","iso":"GG"},
				{"country":"Guinea","code":"224","iso":"GN"},
				{"country":"Guinea-Bissau","code":"245","iso":"GW"},
				{"country":"Guyana","code":"592","iso":"GY"},
				{"country":"Haiti","code":"509","iso":"HT"},
				{"country":"Honduras","code":"504","iso":"HN"},
				{"country":"Hong Kong","code":"852","iso":"HK"},
				{"country":"Hungary","code":"36","iso":"HU"},
				{"country":"Iceland","code":"354","iso":"IS"},
				{"country":"India","code":"91","iso":"IN"},
				{"country":"Indonesia","code":"62","iso":"ID"},
				{"country":"Iran","code":"98","iso":"IR"},
				{"country":"Iraq","code":"964","iso":"IQ"},
				{"country":"Ireland","code":"353","iso":"IE"},
				{"country":"Isle of Man","code":"44-1624","iso":"IM"},
				{"country":"Israel","code":"972","iso":"IL"},
				{"country":"Italy","code":"39","iso":"IT"},
				{"country":"Ivory Coast","code":"225","iso":"CI"},
				{"country":"Jamaica","code":"1-876","iso":"JM"},
				{"country":"Japan","code":"81","iso":"JP"},
				{"country":"Jersey","code":"44-1534","iso":"JE"},
				{"country":"Jordan","code":"962","iso":"JO"},
				{"country":"Kazakhstan","code":"7","iso":"KZ"},
				{"country":"Kenya","code":"254","iso":"KE"},
				{"country":"Kiribati","code":"686","iso":"KI"},
				{"country":"Kosovo","code":"383","iso":"XK"},
				{"country":"Kuwait","code":"965","iso":"KW"},
				{"country":"Kyrgyzstan","code":"996","iso":"KG"},
				{"country":"Laos","code":"856","iso":"LA"},
				{"country":"Latvia","code":"371","iso":"LV"},
				{"country":"Lebanon","code":"961","iso":"LB"},
				{"country":"Lesotho","code":"266","iso":"LS"},
				{"country":"Liberia","code":"231","iso":"LR"},
				{"country":"Libya","code":"218","iso":"LY"},
				{"country":"Liechtenstein","code":"423","iso":"LI"},
				{"country":"Lithuania","code":"370","iso":"LT"},
				{"country":"Luxembourg","code":"352","iso":"LU"},
				{"country":"Macao","code":"853","iso":"MO"},
				{"country":"Macedonia","code":"389","iso":"MK"},
				{"country":"Madagascar","code":"261","iso":"MG"},
				{"country":"Malawi","code":"265","iso":"MW"},
				{"country":"Malaysia","code":"60","iso":"MY"},
				{"country":"Maldives","code":"960","iso":"MV"},
				{"country":"Mali","code":"223","iso":"ML"},
				{"country":"Malta","code":"356","iso":"MT"},
				{"country":"Marshall Islands","code":"692","iso":"MH"},
				{"country":"Mauritania","code":"222","iso":"MR"},
				{"country":"Mauritius","code":"230","iso":"MU"},
				{"country":"Mayotte","code":"262","iso":"YT"},
				{"country":"Mexico","code":"52","iso":"MX"},
				{"country":"Micronesia","code":"691","iso":"FM"},
				{"country":"Moldova","code":"373","iso":"MD"},
				{"country":"Monaco","code":"377","iso":"MC"},
				{"country":"Mongolia","code":"976","iso":"MN"},
				{"country":"Montenegro","code":"382","iso":"ME"},
				{"country":"Montserrat","code":"1-664","iso":"MS"},
				{"country":"Morocco","code":"212","iso":"MA"},
				{"country":"Mozambique","code":"258","iso":"MZ"},
				{"country":"Myanmar","code":"95","iso":"MM"},
				{"country":"Namibia","code":"264","iso":"NA"},
				{"country":"Nauru","code":"674","iso":"NR"},
				{"country":"Nepal","code":"977","iso":"NP"},
				{"country":"Netherlands","code":"31","iso":"NL"},
				{"country":"Netherlands Antilles","code":"599","iso":"AN"},
				{"country":"New Caledonia","code":"687","iso":"NC"},
				{"country":"New Zealand","code":"64","iso":"NZ"},
				{"country":"Nicaragua","code":"505","iso":"NI"},
				{"country":"Niger","code":"227","iso":"NE"},
				{"country":"Nigeria","code":"234","iso":"NG"},
				{"country":"Niue","code":"683","iso":"NU"},
				{"country":"North Korea","code":"850","iso":"KP"},
				{"country":"Northern Mariana Islands","code":"1-670","iso":"MP"},
				{"country":"Norway","code":"47","iso":"NO"},
				{"country":"Oman","code":"968","iso":"OM"},
				{"country":"Pakistan","code":"92","iso":"PK"},
				{"country":"Palau","code":"680","iso":"PW"},
				{"country":"Palestine","code":"970","iso":"PS"},
				{"country":"Panama","code":"507","iso":"PA"},
				{"country":"Papua New Guinea","code":"675","iso":"PG"},
				{"country":"Paraguay","code":"595","iso":"PY"},
				{"country":"Peru","code":"51","iso":"PE"},
				{"country":"Philippines","code":"63","iso":"PH"},
				{"country":"Pitcairn","code":"64","iso":"PN"},
				{"country":"Poland","code":"48","iso":"PL"},
				{"country":"Portugal","code":"351","iso":"PT"},
				{"country":"Puerto Rico","code":"1-787, 1-939","iso":"PR"},
				{"country":"Qatar","code":"974","iso":"QA"},
				{"country":"Republic of the Congo","code":"242","iso":"CG"},
				{"country":"Reunion","code":"262","iso":"RE"},
				{"country":"Romania","code":"40","iso":"RO"},
				{"country":"Russia","code":"7","iso":"RU"},
				{"country":"Rwanda","code":"250","iso":"RW"},
				{"country":"Saint Barthelemy","code":"590","iso":"BL"},
				{"country":"Saint Helena","code":"290","iso":"SH"},
				{"country":"Saint Kitts and Nevis","code":"1-869","iso":"KN"},
				{"country":"Saint Lucia","code":"1-758","iso":"LC"},
				{"country":"Saint Martin","code":"590","iso":"MF"},
				{"country":"Saint Pierre and Miquelon","code":"508","iso":"PM"},
				{"country":"Saint Vincent and the Grenadines","code":"1-784","iso":"VC"},
				{"country":"Samoa","code":"685","iso":"WS"},
				{"country":"San Marino","code":"378","iso":"SM"},
				{"country":"Sao Tome and Principe","code":"239","iso":"ST"},
				{"country":"Saudi Arabia","code":"966","iso":"SA"},
				{"country":"Senegal","code":"221","iso":"SN"},
				{"country":"Serbia","code":"381","iso":"RS"},
				{"country":"Seychelles","code":"248","iso":"SC"},
				{"country":"Sierra Leone","code":"232","iso":"SL"},
				{"country":"Singapore","code":"65","iso":"SG"},
				{"country":"Sint Maarten","code":"1-721","iso":"SX"},
				{"country":"Slovakia","code":"421","iso":"SK"},
				{"country":"Slovenia","code":"386","iso":"SI"},
				{"country":"Solomon Islands","code":"677","iso":"SB"},
				{"country":"Somalia","code":"252","iso":"SO"},
				{"country":"South Africa","code":"27","iso":"ZA"},
				{"country":"South Korea","code":"82","iso":"KR"},
				{"country":"South Sudan","code":"211","iso":"SS"},
				{"country":"Spain","code":"34","iso":"ES"},
				{"country":"Sri Lanka","code":"94","iso":"LK"},
				{"country":"Sudan","code":"249","iso":"SD"},
				{"country":"Suriname","code":"597","iso":"SR"},
				{"country":"Svalbard and Jan Mayen","code":"47","iso":"SJ"},
				{"country":"Swaziland","code":"268","iso":"SZ"},
				{"country":"Sweden","code":"46","iso":"SE"},
				{"country":"Switzerland","code":"41","iso":"CH"},
				{"country":"Syria","code":"963","iso":"SY"},
				{"country":"Taiwan","code":"886","iso":"TW"},
				{"country":"Tajikistan","code":"992","iso":"TJ"},
				{"country":"Tanzania","code":"255","iso":"TZ"},
				{"country":"Thailand","code":"66","iso":"TH"},
				{"country":"Togo","code":"228","iso":"TG"},
				{"country":"Tokelau","code":"690","iso":"TK"},
				{"country":"Tonga","code":"676","iso":"TO"},
				{"country":"Trinidad and Tobago","code":"1-868","iso":"TT"},
				{"country":"Tunisia","code":"216","iso":"TN"},
				{"country":"Turkey","code":"90","iso":"TR"},
				{"country":"Turkmenistan","code":"993","iso":"TM"},
				{"country":"Turks and Caicos Islands","code":"1-649","iso":"TC"},
				{"country":"Tuvalu","code":"688","iso":"TV"},
				{"country":"U.S. Virgin Islands","code":"1-340","iso":"VI"},
				{"country":"Uganda","code":"256","iso":"UG"},
				{"country":"Ukraine","code":"380","iso":"UA"},
				{"country":"United Arab Emirates","code":"971","iso":"AE"},
				{"country":"United Kingdom","code":"44","iso":"GB"},
				{"country":"United States","code":"1","iso":"US"},
				{"country":"Uruguay","code":"598","iso":"UY"},
				{"country":"Uzbekistan","code":"998","iso":"UZ"},
				{"country":"Vanuatu","code":"678","iso":"VU"},
				{"country":"Vatican","code":"379","iso":"VA"},
				{"country":"Venezuela","code":"58","iso":"VE"},
				{"country":"Vietnam","code":"84","iso":"VN"},
				{"country":"Wallis and Futuna","code":"681","iso":"WF"},
				{"country":"Western Sahara","code":"212","iso":"EH"},
				{"country":"Yemen","code":"967","iso":"YE"},
				{"country":"Zambia","code":"260","iso":"ZM"},
				{"country":"Zimbabwe","code":"263","iso":"ZW"}]';
		return json_decode($list);
	}
	public static function total_attr($product_id){
		$usedAttributeCount = \DB::table('tbl_product_variants as pv')
					->join('tbl_product_variant_attribute_value as pvav', 'pv.id', '=', 'pvav.product_variants_id')
					->join('tbl_attribute_values as av', 'pvav.attribute_value_id', '=', 'av.id')
					->join('tbl_attributes as a', 'av.attribute_id', '=', 'a.id')
					->where('pv.product_id', $product_id)
					->where('a.status', 1)
					->where('pv.status', 1)
					->select('a.id','a.name')
					->distinct()
					->get();
		return count($usedAttributeCount);
	}
	public static function get_setting($title){
		if(isset(config('config.setting.setting')->$title)){
			return trim(config('config.setting.setting')->$title);
		}else{
			return "";
		}
	}
	public static function get_lang($title){
		$check_lang = tblLangModel::where('code',\LaravelLocalization::getCurrentLocale())->first();
		if($check_lang){
			$lang_frontend = $check_lang->id;
		}else{
			$lang_frontend =1;
		}
        $lang_config = $lang_frontend;
        $setting = CommonModel::getAll();
        $title_lang = $title . '_' . $lang_config;
        if(isset($setting->$title_lang)){
            return $setting->$title_lang;
        }else{
            return "";
        }
    }
	public static function getAll() {
		$allset = \Cache::remember('default_setting',86400000000, function (){
			return tblSettingModel::all();
		});
		$data_s = new \stdClass();
        foreach ($allset as $item) {
			if($item->key && $item->value){
				$data_s->{$item->key} = $item->value;           
			}
        }
		return $data_s;
	}
	public static function generateRandomString($length = 30) {    
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';   
		$randomString = '';      
		for ($i = 0; $i < $length; $i++) {   
			$randomString .= $characters[rand(0, strlen($characters) - 1)];     
		}        
		return $randomString;  
	}
	
    public static function gen_slug($str,$code=''){	
		if($code!='ja'){
			$str = trim(mb_strtolower($str));
			$str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
			$str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
			$str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
			$str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
			$str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
			$str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
			$str = preg_replace('/(đ)/', 'd', $str);
			$str = preg_replace('/[^a-z0-9-\s]/', '', $str);
			$str = preg_replace('/([\s]+)/', '-', $str);
		}else{
			$str = CommonModel::generateRandomString();
		}
		return $str;
	}
	public static function delete_img($file){
		$storage_path=public_path();
		if(\File::exists($storage_path.$file)){
			\File::delete($storage_path.$file);
		} 
		return 'true';
	}
	/* bootstrap file */
	public static function save_img($file){
		$url='';
		
		if($file!=''){
			if (!file_exists('public_folder')) {
				mkdir('public_folder', 0755, true);
			}
			if (!file_exists('public_folder/folder_image')) {
				mkdir('public_folder/folder_image', 0755, true);
			}
			if (!file_exists('public_folder/folder_image/' . date('Y'))) {
				mkdir('public_folder/folder_image/' . date('Y'), 0755, true);
			}
			if (!file_exists('public_folder/folder_image/' . date('Y') . '/' . date('m'))) {
				mkdir('public_folder/folder_image/' . date('Y') . '/' . date('m'), 0755, true);
			}
			if (!file_exists('public_folder/folder_image/' . date('Y') . '/' . date('m') . '/' . date('d'))) {
				mkdir('public_folder/folder_image/' . date('Y') . '/' . date('m') . '/' . date('d'), 0755, true);
			}
			$fileName = CommonModel::generateRandomString(5).'_'.CommonModel::gen_slug($file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
			$upload = $file->move(public_path() . '/public_folder/folder_image/'.date('Y') . '/' . date('m') . '/' . date('d'), time() . '_' . $fileName)->getPathname();
			$url = '/public_folder/folder_image/'.date('Y') . '/' . date('m') . '/' . date('d').'/'.time() . '_' . $fileName;
		}
		
		/*
		$url='';
		$storage_path = storage_path('app/public'); /* save to storage/app/public folder
		$public_folder = 'folder_files';
		if($file!=''){
			$folder_path=$storage_path.'/'.$public_folder;
			if (!file_exists($folder_path)) {
				mkdir($folder_path, 0755, true);
			}
			if (!file_exists($folder_path.'/' . date('Y'))) {
				mkdir($folder_path.'/' . date('Y'), 0755, true);
			}
			if (!file_exists($folder_path.'/' . date('Y') . '/' . date('m'))) {
				mkdir($folder_path.'/' . date('Y') . '/' . date('m'), 0755, true);
			}
			if (!file_exists($folder_path.'/' . date('Y') . '/' . date('m') . '/' . date('d'))) {
				mkdir($folder_path.'/' . date('Y') . '/' . date('m') . '/' . date('d'), 0755, true);
			}
			$fileName = CommonModel::generateRandomString(5).'_'.CommonModel::gen_slug($file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
			$upload = $file->move($folder_path.'/'.date('Y') . '/' . date('m') . '/' . date('d'), time() . '_' . $fileName)->getPathname();
			$url = '/storage/'.$public_folder.'/'.date('Y') . '/' . date('m') . '/' . date('d').'/'.time() . '_' . $fileName;
		}
		*/
		return $url;
	}
	public static function validate_img($file){
		$checkempty='1';
		$acceptedFormats = array('image/jpeg', 'image/gif', 'image/png'); 
		$extension = $file->getMimeType();
		$size = $file->getSize();
		if (($size < 5000000) && in_array($extension, $acceptedFormats)) {
			$checkempty='1';
		}else{
			$checkempty='0';
		}
		return $checkempty;
	}
	public static function delete_cache_img(){
		/* xoa folder cache */
		$path = public_path() . '/cache_files/files_upload/'. date('Ym');
		if(\File::exists($path)){
			$files = \File::allFiles($path);
			foreach ($files as $value) {
				$c_time = \File::lastModified($value);
				if (time() - $c_time > 3600) {
					
					\File::delete($value);
					
				}
			}
		}
	}
	/* image in tinymce content */
	public static function transfer_img($data){		
		if($data!=''){
			$html = HtmlDomParser::str_get_html($data);
			foreach ($html->find('img') as $element) {
				$image = $element->src;
				if(strpos($image,'cache_files/files_upload') !== false){
					$file_path = str_replace(asset(''), '', $image);
					$file_path_new = str_replace('cache_files/files_upload', 'public_folder/files_upload', $file_path);
					if (!file_exists('public_folder/files_upload')) {
						mkdir('public_folder/files_upload', 0755, true);
					}
					if (!file_exists('public_folder/files_upload/' . date('Ym'))) {
						mkdir('public_folder/files_upload/' . date('Ym'), 0755, true);
					}				
					$jhf = \File::move($file_path, $file_path_new);
					\File::delete($file_path);
					$element->src = str_replace(asset(''),'/',str_replace('cache_files/files_upload/', 'public_folder/files_upload/', $image));
				}
			}
		}else{
			$html='';
		}
		return $html;	
	}
	/* edit image in tinymce content */
	public static function transfer_img_edit($data_old,$data_new){
		$list_old=[];
		if($data_old!=''){
			$html_old = HtmlDomParser::str_get_html($data_old);
			foreach ($html_old->find('img') as $element_old) {
				if(strpos($element_old->src,'public_folder/files_upload') !== false){
					$list_old[] = $element_old->src;
				}
			}
		}
		/* noi dung moi */
		$list_new=[];
		if($data_new!=''){
			$html_new = HtmlDomParser::str_get_html($data_new);
			foreach ($html_new->find('img') as $element_new) {
					$list_new[] = $element_new->src;
			}
		}
		$result_old=array_diff($list_old,$list_new);
		$result_new=array_diff($list_new,$list_old);
		/* xoa ảnh cũ ko tồn tại trong nội dung mới */
	
		if(count($result_old)>0){
			foreach($result_old as $del){				
				if(\File::exists(public_path($del))){
					\File::delete(public_path($del));
				} 				
			}
		}
		$html='';
		/* insert anh moi */
		if($data_new!=''){
			$html = HtmlDomParser::str_get_html($data_new);
			foreach ($html->find('img') as $element) {
				$image = $element->src;			
				if(strpos($image,'cache_files/files_upload') !== false){
					if(in_array($image,$result_new)){
						$file_path = str_replace(asset(''), '', $image);
						$file_path_new = str_replace('cache_files/files_upload', 'public_folder/files_upload', $file_path);
						if (!file_exists('public_folder/files_upload')) {
							mkdir('public_folder/files_upload', 0755, true);
						}
						if (!file_exists('public_folder/files_upload/' . date('Ym'))) {
							mkdir('public_folder/files_upload/' . date('Ym'), 0755, true);
						}				
						if(\File::exists($file_path)){
							$jhf = \File::move($file_path, $file_path_new);					
							\File::delete($file_path);
						}
						$element->src = str_replace(asset(''),'/',str_replace('cache_files/files_upload/', 'public_folder/files_upload/', $image));
					}
				}
			}
		}
		return $html;
	}
	public static function move_img($data){
		$html='';
		if($data!=''){
			$image = $data;
			$file_path = public_path() . '/' .str_replace(asset(''), '', $image);
			$file_path_new = str_replace('cache_files/files_upload', 'public_folder/files_upload', $file_path);
			if (!file_exists('public_folder/files_upload')) {
				mkdir('public_folder/files_upload', 0755, true);
			}
			if (!file_exists('public_folder/files_upload/' . date('Ym'))) {
				mkdir('public_folder/files_upload/' . date('Ym'), 0755, true);
			}		
			$jhf = \File::move($file_path, $file_path_new);
			if(strpos($file_path,'cache_files') !== false){
				\File::delete($file_path);
			}
			$html = str_replace(asset(''),'/',str_replace('cache_files/files_upload/', 'public_folder/files_upload/', $image));
			
		}
		
		return $html;
	
	}
	public static function tree_loop_option($listcateproduct, $selected = [], $lang_id = 1, $id_parent = 0, $level = 0) {
        $menu_tmp = array();
        foreach ($listcateproduct as $key => $item) {
           
			if ((int) $item->parent == (int) $id_parent) {
				$menu_tmp[] = $item;
				unset($listcateproduct[$key]);
			}
		
        }
        if ($menu_tmp) {
            if ($level > 0) {
                echo '<ul>';
            }
            $level_next = $level + 1;
            foreach ($menu_tmp as $item) {
                $check = '';
                if (in_array($item->id, $selected)) {
                    $check = 'selected';
                }
                if ($id_parent == 0) {
                    ?>
                    <option value="<?php echo $item->id; ?>" <?php echo $check; ?>><strong> <?php echo $item->name; ?></strong></option>
                    <?php CommonModel::tree_loop_option($listcateproduct, $selected, $lang_id, $item->id, $level_next); ?>                                      

                    <?php
                } else {
                    $leve = CommonModel::tring_loop('―', $level_next - 1);
                    ?>
                    <option value="<?php echo $item->id; ?>"  <?php echo $check; ?>> <?php echo $leve . ' ' . $item->name; ?></option>
                    <?php CommonModel::tree_loop_option($listcateproduct, $selected, $lang_id, $item->id, $level_next); ?>

                    <?php
                }
            }
            if ($level > 0) {
                echo '</ul>';
            }
        }
    }
	public static function tring_loop($s, $n) {
        $re = '';
        for ($i = 0; $i < $n; $i++) {
            $re .= $s;
        }
        return $re;
    }



	/* save file in storage */
	public static function storage_save_img($file){
		$url='';
		$storage_path = storage_path('app/public'); /* save to storage/app/public folder */
		$public_folder = 'folder_files';
		if($file!=''){
			$folder_path=$storage_path.'/'.$public_folder;
			if (!file_exists($folder_path)) {
				mkdir($folder_path, 0755, true);
			}
			if (!file_exists($folder_path.'/' . date('Y'))) {
				mkdir($folder_path.'/' . date('Y'), 0755, true);
			}
			if (!file_exists($folder_path.'/' . date('Y') . '/' . date('m'))) {
				mkdir($folder_path.'/' . date('Y') . '/' . date('m'), 0755, true);
			}
			if (!file_exists($folder_path.'/' . date('Y') . '/' . date('m') . '/' . date('d'))) {
				mkdir($folder_path.'/' . date('Y') . '/' . date('m') . '/' . date('d'), 0755, true);
			}
			$fileName = CommonModel::generateRandomString(5).'_'.CommonModel::gen_slug($file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
			$upload = $file->move($folder_path.'/'.date('Y') . '/' . date('m') . '/' . date('d'), time() . '_' . $fileName)->getPathname();
			$url = '/storage/'.$public_folder.'/'.date('Y') . '/' . date('m') . '/' . date('d').'/'.time() . '_' . $fileName;
		}
		
		return $url;
	}
}
