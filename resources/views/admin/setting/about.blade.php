@extends("admin.layout.hometemplate")


@section('title', 'Admin & Dashboard')
@section('desc', 'Admin & Dashboard')
@section('keyword', 'Admin & Dashboard')


@section("css")
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/fontawesome.css">
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/icofont.css">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/themify.css">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/flag-icon.css">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/feather-icon.css">
<!-- Plugins css start-->
<!-- Plugins css Ends-->
<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/date-picker.css">
<!-- App css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/style.css">
<link id="color" rel="stylesheet" href="{{asset('assets/admin')}}/assets/css/color-1.css" media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/responsive.css">
@endsection
@section("js")
<script src="{{asset('assets/admin')}}/assets/js/jquery-3.5.1.min.js"></script>
<!-- feather icon js-->
<script src="{{asset('assets/admin')}}/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="{{asset('assets/admin')}}/assets/js/sidebar-menu.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/config.js"></script>
<!-- Bootstrap js-->
<script src="{{asset('assets/admin')}}/assets/js/bootstrap/popper.min.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/bootstrap/bootstrap.min.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/script.js"></script>
<script>

</script>
@endsection

@section("content")
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Giao diện</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('dashboard-index')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Giao diện</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<form class="form-wizard" method="post" action="{{route('post-dashboard-setting')}}" enctype="multipart/form-data">
		@csrf
	
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						@include('admin.alert')						
						<div class="row">
							<h3>Section 1</h3>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Ảnh sứ mệnh 345x258 <img src="@if(isset($data->website_about1)){{$data->website_about1}}@endif" width="100px" id="img_website_about1"/></label>	
									<input style="display:none" class="form-control file_upload_server_custom" id="label_website_about1" type="file" data-img="img_website_about1" data-id="website_about1" data-url="{{route('dashboard-upload-one')}}" accept="image/*">
									<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_website_about1">Upload file</label>
										{{Form::text('website_about1',isset($data->website_about1) ? $data->website_about1: '',array('class'=>'form-control input-group-air ','id'=>'website_about1'))}}
									</div>
								</div>
							</div>
							
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Nội dung sứ mệnh</label>						
									{{Form::text('setting_about2',isset($data->setting_about2) ? $data->setting_about2: '',array('class'=>'form-control tinymce_editor'))}}						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Ảnh tầm nhìn 345x258 <img src="@if(isset($data->website_about3)){{$data->website_about3}}@endif" width="100px" id="img_website_about3"/></label>	
									<input style="display:none" class="form-control file_upload_server_custom" id="label_website_about3" type="file" data-img="img_website_about3" data-id="website_about3" data-url="{{route('dashboard-upload-one')}}" accept="image/*">
									<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_website_about3">Upload file</label>
										{{Form::text('website_about3',isset($data->website_about3) ? $data->website_about3: '',array('class'=>'form-control input-group-air ','id'=>'website_about3'))}}
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Nội dung tầm nhìn</label>						
									{{Form::text('setting_about4',isset($data->setting_about4) ? $data->setting_about4: '',array('class'=>'form-control tinymce_editor'))}}						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Ảnh tôn chỉ 345x258 <img src="@if(isset($data->website_about5)){{$data->website_about5}}@endif" width="100px" id="img_website_about5"/></label>	
									<input style="display:none" class="form-control file_upload_server_custom" id="label_website_about5" type="file" data-img="img_website_about5" data-id="website_about5" data-url="{{route('dashboard-upload-one')}}" accept="image/*">
									<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_website_about5">Upload file</label>
										{{Form::text('website_about5',isset($data->website_about5) ? $data->website_about5: '',array('class'=>'form-control input-group-air ','id'=>'website_about5'))}}
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Nội dung tôn chỉ</label>						
									{{Form::text('setting_about6',isset($data->setting_about6) ? $data->setting_about6: '',array('class'=>'form-control tinymce_editor'))}}						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Dấu mốc lịch sử</label>						
									{{Form::textarea('setting_about7',isset($data->setting_about7) ? $data->setting_about7: '',array('class'=>'form-control'))}}						
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-12">
				<div class="mb-4">
					<button type="submit" class="btn btn-primary w-md">Lưu</button>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection