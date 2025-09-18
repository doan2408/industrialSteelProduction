<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CommonModel;
use App\Models\tblSettingModel;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse;
use Validator;
class HomeController extends Controller {
	public function upload_file(Request $request) {
		$messages = [
			 'required' => 'Vui lòng tải file lên',
			 'image' => 'File tải lên không phải là file video',
			 'mimes' => 'Định dạng cho phép mp4',
			 'max' => 'Dung lượng tối đa',
		 ];
		 $validator = Validator::make($request->all(), [
					 'image' => 'required'
						 ], $messages);
		$folder_path = 'public_folder/files_upload';
		if ($validator->passes()) {
			$image = $request->file('image');
			if (!file_exists($folder_path)) {
				mkdir($folder_path, 0755, true);
			}
			if (!file_exists($folder_path.'/' . date('Ym'))) {
				mkdir($folder_path.'/' . date('Ym'), 0755, true);
			}
			
			$destinationPath = $folder_path.'/'. date('Ym').'/';
			$profileImage = rand(100,999) .'-'. CommonModel::gen_slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME))."." . $image->getClientOriginalExtension();
			$image->move($destinationPath, $profileImage);
			$insert = "/$destinationPath$profileImage";
				
			
			$out_put = array(
				 'check' => 1,
				 'content' => $insert
			);
			 $return_output = json_encode($out_put);
			 echo $return_output;
		 } else {
			 $out_put = array(
				 'check' => 0,
				 'content' => $validator->messages()->all(':message')
			 );
			 $return_output = json_encode($out_put);
			 echo $return_output;
		 }
	}
	public function upload_multi(Request $request) {
		$messages = [
			 'required' => 'Vui lòng tải file lên',
			 'image' => 'File tải lên không phải là file ảnh',
			 'max' => 'Dung lượng tối đa',
		 ];
		 $validator = Validator::make($request->all(), [
					 'image' => 'required',
						 ], $messages);
						 $folder_path = 'public_folder/files_upload';
		 if ($validator->passes()) {
			 if ($image = $request->file('image')) {
				if (!file_exists($folder_path)) {
					mkdir($folder_path, 0755, true);
				}
				if (!file_exists($folder_path.'/' . date('Ym'))) {
					mkdir($folder_path.'/' . date('Ym'), 0755, true);
				}
				$public_path=public_path();
				 foreach ($image as $files) {
					 $getClientOriginalName = rand(100,999) .'-'. CommonModel::gen_slug($files->getClientOriginalName());
					 $extension = $files->extension();
					 $destinationPath = $folder_path.'/'. date('Ym').'/';
					 $profileImage = $getClientOriginalName . "." . $files->extension();
					 $files->move($destinationPath, $profileImage);
					 $fullpath = "/$destinationPath$profileImage";
					 
					if($extension == 'svg' || $extension == 'webp'){
						$insert[]['image'] = $fullpath;
					}else{
						 $output_file = $public_path.'/'.$destinationPath.$getClientOriginalName.'.webp'; 
						
						 /* convert to webp*/
						if($extension == 'png'){
							$image_obj = imagecreatefrompng($public_path.$fullpath);
							imagepalettetotruecolor($image_obj);
							imagealphablending($image_obj, true);
							imagesavealpha($image_obj, true);						
						}else{
							$image_obj = imagecreatefromjpeg($public_path.$fullpath);
						}
						$imagewebp = imagewebp($image_obj, $output_file);
						if (false !== $imagewebp) {
							$insert[]['image'] = str_replace($public_path.'/','/',$output_file);
						}
						imagedestroy($image_obj);
						/* remove file upload */
						if(\File::exists($public_path.$fullpath)){
							\File::delete($public_path.$fullpath);
						}
					}
				 }
			 }
			 $out_put = array(
				 'check' => 1,
				 'type' => 'multi',
				 'content' => $insert
			 );
			 $return_output = json_encode($out_put);
			 echo $return_output;
		 } else {
			 $out_put = array(
				 'check' => 0,
				 'content' => $validator->messages()->all(':message')
			 );
			 $return_output = json_encode($out_put);
			 echo $return_output;
		 }
	}
	/* upload one */
	public function upload_one(Request $request) {
		$messages = [
			 'required' => 'Vui lòng tải file lên',
			 'image' => 'File tải lên không phải là file ảnh',
			 'max' => 'Dung lượng tối đa',
		 ];
		 $validator = Validator::make($request->all(), [
					 'image' => 'required'
						 ], $messages);
		$folder_path = 'public_folder/files_upload';
		if ($validator->passes()) {
			$image = $request->file('image');
			if (!file_exists($folder_path)) {
				mkdir($folder_path, 0755, true);
			}
			if (!file_exists($folder_path.'/' . date('Ym'))) {
				mkdir($folder_path.'/' . date('Ym'), 0755, true);
			}
			$width = $request->width;
			$height = $request->height;
			$public_path=public_path();
			$getClientOriginalName =rand(100,999) .'-'. CommonModel::gen_slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME));
			$extension = $image->getClientOriginalExtension();
			$destinationPath = $folder_path.'/'. date('Ym').'/';
			$profileImage = $getClientOriginalName . "." . $image->getClientOriginalExtension();			
			$image->move($destinationPath, $profileImage);
			$fullpath = "/$destinationPath$profileImage";
			
			list($cwidth, $cheight) = getimagesize($public_path.$fullpath);		/* kich thuoc file */
			$ratioUpload = $cwidth/$cheight; /* ti le file */
			
			if($extension == 'svg' || $extension == 'gif'){
				$out_put = array(
					 'check' => 1,
					 'content' => $fullpath
				);				
			}else if($extension == 'webp'){
				$output_file = $public_path.'/'.$destinationPath.$getClientOriginalName.'.'.$extension; 
				if($width!='undefined'){
					if($width!=0){			
						$image_obj = imagecreatefromwebp($public_path.$fullpath);	
						if($cwidth < $width){
							$newHeight = round($width/$ratioUpload);
							$resized = imagecreatetruecolor($width,$newHeight);
							imagecopyresampled($resized, $image_obj, 0, 0, 0, 0, $width, $newHeight, $cwidth, $cheight);
							$imagecreate = imagecrop($resized, ['x' => 0, 'y' => 0, 'width' => $width, 'height' => $height]);
						}else{
							$ratioNew = $width/$height;
							/* crop theo chiều ngắn hơn */
							if($cwidth<=$cheight){									
								$imagecreate = imagecrop($image_obj, ['x' => 0, 'y' => 0, 'width' => $cwidth, 'height' => round($cwidth/$ratioNew)]);
							}else{
								$imagecreate = imagecrop($image_obj, ['x' => 0, 'y' => 0, 'width' => $cheight, 'height' => round($cheight/$ratioNew)]);
							}
						}
						$imagewebp = imagewebp($imagecreate, $output_file);
						
						
						$insert='';				
						if (false !== $imagewebp) {
							$insert = str_replace($public_path,'',$output_file);
						}						
						imagedestroy($image_obj);				
						$out_put = array(
							 'check' => 1,
							 'content' => $insert
						);
					}else{
						$out_put = array(
							 'check' => 1,
							 'content' => $fullpath
						);	
					}
				}else{
					$out_put = array(
						 'check' => 1,
						 'content' => $fullpath
					);	
				}
			}else{
				$output_file = $public_path.'/'.$destinationPath.$getClientOriginalName.'.webp'; 
				$profileImageResize = $destinationPath.'rz'.$profileImage;
				if($extension == 'png'){
					$image_obj = imagecreatefrompng($public_path.$fullpath);
					
					if($width!='undefined'){
						if($width!=0){		
							if($cwidth < $width){
								$newHeight = round($width/$ratioUpload);
								$resized = imagecreatetruecolor($width,$newHeight);
								
								imagealphablending($resized, false);
								imagesavealpha($resized, true);
								$transparent = imagecolorallocatealpha($resized, 0, 0, 0, 127);
								imagefill($resized, 0, 0, $transparent);
								
								imagecopyresampled($resized, $image_obj, 0, 0, 0, 0, $width, $newHeight, $cwidth, $cheight);
								$imagecreate = imagecrop($resized, ['x' => 0, 'y' => 0, 'width' => $width, 'height' => $height]);
								
								imagealphablending($imagecreate, false);
								imagesavealpha($imagecreate, true);
								
							}else{
								$ratioNew = $width/$height;
								$trueColorImg = imagecreatetruecolor(imagesx($image_obj), imagesy($image_obj));
								imagealphablending($trueColorImg, false);
								imagesavealpha($trueColorImg, true);
								imagecopy($trueColorImg, $image_obj, 0, 0, 0, 0, imagesx($image_obj), imagesy($image_obj));
								$transparent = imagecolorallocatealpha($trueColorImg, 0, 0, 0, 127);
								imagefill($trueColorImg, 0, 0, $transparent);
								
								/* crop theo chiều ngắn hơn */
								if($cwidth<=$cheight){									
									$imagecreate = imagecrop($trueColorImg, ['x' => 0, 'y' => 0, 'width' => $cwidth, 'height' => round($cwidth/$ratioNew)]);
								}else{
									$imagecreate = imagecrop($trueColorImg, ['x' => 0, 'y' => 0, 'width' => $cheight, 'height' => round($cheight/$ratioNew)]);
								}
								imagealphablending($imagecreate, false);
								imagesavealpha($imagecreate, true);
							}
							$imagewebp = imagewebp($imagecreate, $output_file);
						}else{
							imagealphablending($image_obj, false);
							imagesavealpha($image_obj, true);
							$transparent = imagecolorallocatealpha($image_obj, 0, 0, 0, 127);
							imagefill($image_obj, 0, 0, $transparent);
							$imagewebp = imagewebp($image_obj, $output_file);
						}
					}else{
						$trueColorImg = imagecreatetruecolor(imagesx($image_obj), imagesy($image_obj));
						imagealphablending($trueColorImg, false);
						imagesavealpha($trueColorImg, true);
						imagecopy($trueColorImg, $image_obj, 0, 0, 0, 0, imagesx($image_obj), imagesy($image_obj));
						$transparent = imagecolorallocatealpha($trueColorImg, 0, 0, 0, 127);
						imagefill($trueColorImg, 0, 0, $transparent);
						$imagewebp = imagewebp($trueColorImg, $output_file);
					}						
				}else{
					$image_obj = imagecreatefromjpeg($public_path.$fullpath);
					if($width!='undefined'){
						if($width!=0){			
							if($cwidth < $width){
								$newHeight = round($width/$ratioUpload);
								$resized = imagecreatetruecolor($width,$newHeight);
								imagecopyresampled($resized, $image_obj, 0, 0, 0, 0, $width, $newHeight, $cwidth, $cheight);
								$imagecreate = imagecrop($resized, ['x' => 0, 'y' => 0, 'width' => $width, 'height' => $height]);
							}else{
								$ratioNew = $width/$height;
								/* crop theo chiều ngắn hơn */
								if($cwidth<=$cheight){									
									$imagecreate = imagecrop($image_obj, ['x' => 0, 'y' => 0, 'width' => $cwidth, 'height' => round($cwidth/$ratioNew)]);
								}else{
									$imagecreate = imagecrop($image_obj, ['x' => 0, 'y' => 0, 'width' => $cheight, 'height' => round($cheight/$ratioNew)]);
								}
							}
							$imagewebp = imagewebp($imagecreate, $output_file);
						}else{
							$imagewebp = imagewebp($image_obj, $output_file);
						}
					}else{
						$imagewebp = imagewebp($image_obj, $output_file);
					}		
				}
				$insert='';
				if (false !== $imagewebp) {
					$insert = str_replace($public_path,'',$output_file);
				}
				imagedestroy($image_obj);
				/* remove file upload */
				if(\File::exists($public_path.$fullpath)){
					\File::delete($public_path.$fullpath);
				}
				if(\File::exists($public_path.'/'.$profileImageResize)){
					\File::delete($public_path.'/'.$profileImageResize);
				}	
				
				$out_put = array(
					 'check' => 1,
					 'content' => $insert
				);
			}
			$return_output = json_encode($out_put);
			echo $return_output;
		 } else {
			 $out_put = array(
				 'check' => 0,
				 'content' => $validator->messages()->all(':message')
			 );
			 $return_output = json_encode($out_put);
			 echo $return_output;
		 }
	}
	
	/*save temp path in content */
	public function upload_temp(Request $request) {
		$messages = [
			 'required' => 'Vui lòng tải file lên',
			 'image' => 'File tải lên không phải là file ảnh',
			 'max' => 'Dung lượng tối đa',
		 ];
		 $validator = Validator::make($request->all(), [
					 'image' => 'required',
						 ], $messages);
						 $folder_path = 'cache_files/files_upload';
		 if ($validator->passes()) {
			 if ($image = $request->file('image')) {
				if (!file_exists($folder_path)) {
					mkdir($folder_path, 0755, true);
				}
				if (!file_exists($folder_path.'/' . date('Ym'))) {
					mkdir($folder_path.'/' . date('Ym'), 0755, true);
				}
				$public_path=public_path();
				 foreach ($image as $files) {
					 $getClientOriginalName =rand(100,999) .'-'. CommonModel::gen_slug(pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME));
					 $extension = $files->extension();
					 $destinationPath = $folder_path.'/'. date('Ym').'/';
					 $profileImage = $getClientOriginalName . "." . $files->extension();
					 $files->move($destinationPath, $profileImage);
					 $fullpath = "/$destinationPath$profileImage";
					 
					if($extension == 'svg' || $extension == 'webp'){
						$insert[]['image'] = $fullpath;
					}else{
						 $output_file = $public_path.'/'.$destinationPath.$getClientOriginalName.'.webp'; 
						
						 /* convert to webp*/
						if($extension == 'png'){
							$image_obj = imagecreatefrompng($public_path.$fullpath);
							imagepalettetotruecolor($image_obj);
							imagealphablending($image_obj, true);
							imagesavealpha($image_obj, true);						
						}else{
							$image_obj = imagecreatefromjpeg($public_path.$fullpath);
						}
						$imagewebp = imagewebp($image_obj, $output_file);
						if (false !== $imagewebp) {
							$insert[]['image'] = str_replace($public_path.'/',asset(''),$output_file);
						}
						imagedestroy($image_obj);
						/* remove file upload */
						if(\File::exists($public_path.$fullpath)){
							\File::delete($public_path.$fullpath);
						}
					}
				 }
			 }
			 $out_put = array(
				 'check' => 1,
				 'type' => 'multi',
				 'content' => $insert
			 );
			 $return_output = json_encode($out_put);
			 echo $return_output;
		 } else {
			 $out_put = array(
				 'check' => 0,
				 'content' => $validator->messages()->all(':message')
			 );
			 $return_output = json_encode($out_put);
			 echo $return_output;
		 }
	}
	public function storage_upload_temp(Request $request) {
		$messages = [
			 'required' => 'Vui lòng tải file lên',
			 'image' => 'File tải lên không phải là file ảnh',
			 'mimes' => 'Định dạng cho phép jpeg,png,jpg,gif,svg',
			 'max' => 'Dung lượng tối đa',
		 ];
		 $validator = Validator::make($request->all(), [
					 'image' => 'required',
					 'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
						 ], $messages);
						 $folder_path = 'cache_files/files_upload';
		 if ($validator->passes()) {
			 if ($image = $request->file('image')) {
				if (!file_exists($folder_path)) {
					mkdir($folder_path, 0755, true);
				}
				if (!file_exists($folder_path.'/' . date('Ym'))) {
					mkdir($folder_path.'/' . date('Ym'), 0755, true);
				}
				 foreach ($image as $files) {
					 $destinationPath = $folder_path.'/'. date('Ym').'/';
					 $profileImage = md5(time() . $files->getClientOriginalName()) . "." . $files->extension();
					 $files->move($destinationPath, $profileImage);
					 $insert[]['image'] = asset('') . "$destinationPath$profileImage";
				 }
			 }
			 $out_put = array(
				 'check' => 1,
				 'type' => 'multi',
				 'content' => $insert
			 );
			 $return_output = json_encode($out_put);
			 echo $return_output;
		 } else {
			 $out_put = array(
				 'check' => 0,
				 'content' => $validator->messages()->all(':message')
			 );
			 $return_output = json_encode($out_put);
			 echo $return_output;
		 }
	}
    public function login() {
        return view('admin.login');
    }

    public function index() {
		
        return view('admin.index');
    }

    public function login_post(Request $request) {
        if (\Auth::attempt(array('email' => $request->email, 'password' => $request->password, 'status' => 1),true)) {			
			return \Redirect::to(\URL::route('dashboard-index'));			
        } else {
            \Session::flash('admin_notify_error','Tài khoản không đúng');
            return \Redirect::back()->withInput();
        }
    }
	public function logout(){
		\Auth::logout();
		return \Redirect::route('dashboard-login');
	}
	public function profile(){		
		return view('admin.profile');		
	}
	public function profile_post(Request $request){
		$rules=[
            'name' => 'required',
        ];
		$messages = [
			'required' => 'Trường :attribute không được để trống.',
		];
		$field=[
			'name'=>'Tên',
		];
        $input_all = $request->all();		
		$validator = Validator::make($input_all, $rules, $messages, $field);
		if (!$validator->fails()) {
			$user = User::find(\Auth::user()->id);
			if($user){
				if($request->hasFile('images')){
					$user->avatar = CommonModel::save_img($request->file('images'));			
					CommonModel::delete_img($request->hidden_images);
				}else{
					if($request->hidden_images !=''){
						$user->avatar = $request->hidden_images;
					}else{					
						CommonModel::delete_img($user->avatar);
						$user->avatar='';
					}
				}	
				$user->name=$request->input('name');
				$user->phone=$request->input('phone');
				if($request->input('password')!=''){
					$user->password= \Hash::make($request->input('password'));
				}
				$user->dob = strtotime(\Datetime::createFromFormat('d/m/Y', $request->dob)->format('Y-m-d'));	
				$user->save();
			}
			\Session::flash('admin_notify_success', 'Cập nhật thành công');
			return \Redirect::back();
		}else{
			return \Redirect::back()->withInput()->withErrors($validator->messages()->all('<li>:message</li>'));
		}
	}
	public function change_avt(){
		$file = $_FILES['change_avt'];
		$acceptedFormats = array('image/jpeg', 'image/gif', 'image/png');      
		$name = $file["name"];
		$extension = $file["type"];
		
		$out_put='';
		/* check size */       
		if ($file['size'] < 2000000 && in_array($extension, $acceptedFormats)) {       
			$uploadOk = 1;        
		}else{      
			$uploadOk = 0;        
		}        
		if($uploadOk==0){   
			$out_put = array(
				'check' => 0,				
				'content'=>"Ảnh tối đa 2gb và định dạng jpg,png",
			);
			$return_output = json_encode($out_put);    
		}else{     
			if (!file_exists(public_path().'/public/admin/'. date('d/m/Y',time()))) {
				mkdir(public_path().'/public/admin/'. date('d/m/Y',time()), 0777, true);
			}
			if($name!=''){
				move_uploaded_file($file['tmp_name'],public_path().'/public/admin/'. date('d/m/Y',time()).'/'.time() . '_' . $name);  
				
				$avatar_url = '/public/admin/'.date('d/m/Y',time()).'/'.time() . '_' . $name;
			}else{
				$avatar_url='';
			}	
			$user = User::find(\Auth::user()->id);
			$user->avatar = $avatar_url;
			$user->save();
			$out_put = array(
				'check' => 1,				
				'content'=>"Cập nhật thành công",
			);
			$return_output = json_encode($out_put); 
		}	
		echo $return_output;  
	}
	public function not_permisson(){
		return view('admin.403');
	}
	public function notfound_404(){
		return view('admin.404');
	}
}
