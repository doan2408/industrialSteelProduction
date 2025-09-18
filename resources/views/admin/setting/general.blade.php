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
				<h3>Thông tin chung</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('dashboard-index')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Thông tin chung</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<form class="form-wizard" method="post" action="{{route('post-dashboard-setting')}}" enctype="multipart/form-data">
		@csrf
		@include('admin.alert')
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-12 col-lg-4">
						<div class="mb-3">
							<label class="form-label">Số điện thoại</label>						
							{{Form::text('setting_phone',isset($data->setting_phone) ? $data->setting_phone: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="mb-3">
							<label class="form-label">Email</label>						
							{{Form::text('setting_email',isset($data->setting_email) ? $data->setting_email: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="mb-3">
							<label class="form-label">Zalo</label>						
							{{Form::text('setting_zalo',isset($data->setting_zalo) ? $data->setting_zalo: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="mb-3">
							<label class="form-label">Địa chỉ nhà máy 1</label>						
							{{Form::text('setting_address1',isset($data->setting_address1) ? $data->setting_address1: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="mb-3">
							<label class="form-label">Hotline nhà máy 1</label>						
							{{Form::text('setting_hotline1',isset($data->setting_hotline1) ? $data->setting_hotline1: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="mb-3">
							<label class="form-label">Link map nhà máy 1</label>						
							{{Form::text('setting_map1',isset($data->setting_map1) ? $data->setting_map1: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="mb-3">
							<label class="form-label">Địa chỉ nhà máy 2</label>						
							{{Form::text('setting_address2',isset($data->setting_address2) ? $data->setting_address2: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="mb-3">
							<label class="form-label">Hotline nhà máy 2</label>						
							{{Form::text('setting_hotline2',isset($data->setting_hotline2) ? $data->setting_hotline2: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="mb-3">
							<label class="form-label">Link map nhà máy 2</label>						
							{{Form::text('setting_map2',isset($data->setting_map2) ? $data->setting_map2: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="mb-3">
							<label class="form-label">Facebook</label>						
							{{Form::text('setting_facebook',isset($data->setting_facebook) ? $data->setting_facebook: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="mb-3">
							<label class="form-label">Google</label>						
							{{Form::text('setting_google',isset($data->setting_google) ? $data->setting_google: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="mb-3">
							<label class="form-label">Linkedin</label>						
							{{Form::text('setting_linkedin',isset($data->setting_linkedin) ? $data->setting_linkedin: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="mb-3">
							<label class="form-label">Instagram</label>						
							{{Form::text('setting_instagram',isset($data->setting_instagram) ? $data->setting_instagram: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="mb-3">
							<label class="form-label">Twitter</label>						
							{{Form::text('setting_twitter',isset($data->setting_twitter) ? $data->setting_twitter: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-12">
						<div class="mb-3">
							<label class="form-label">Bản đồ</label>						
							{{Form::textarea('setting_map',isset($data->setting_map) ? $data->setting_map: '',array('class'=>'form-control'))}}						
						</div>
					</div>
					<div class="col-12 col-lg-12">
						<div class="mb-4">
							<button type="submit" class="btn btn-primary w-md">Lưu</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

@endsection