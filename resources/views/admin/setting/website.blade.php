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
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Tiêu đề website</label>						
									{{Form::text('setting_website_title',isset($data->setting_website_title) ? $data->setting_website_title: '',array('class'=>'form-control'))}}						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Mô tả website</label>						
									{{Form::text('setting_website_desc',isset($data->setting_website_desc) ? $data->setting_website_desc: '',array('class'=>'form-control'))}}						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label>Menu</label>
									<?php
									$arrmenu = array();
									foreach ($menu as $i_menu) {
										$arrmenu = $arrmenu + array($i_menu->id => $i_menu->name);
									}
									$check = '';
									foreach ($data as $key => $value) {
										if ($key == 'website_menu') {
											$check = $value;
										}
									}
									?>
									{{Form::select('website_menu', $arrmenu,$check,['class'=>'form-control m-input m-input--square'])}}	
							
								</div>
							</div>							
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label>Menu footer</label>
									<?php
									$arrmenu = array();
									foreach ($menu as $i_menu) {
										$arrmenu = $arrmenu + array($i_menu->id => $i_menu->name);
									}
									$check = '';
									foreach ($data as $key => $value) {
										if ($key == 'website_menu1') {
											$check = $value;
										}
									}
									?>
									{{Form::select('website_menu1', $arrmenu,$check,['class'=>'form-control m-input m-input--square'])}}	
							
								</div>
							</div>	
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Mô tả trang sản phẩm</label>						
									{{Form::textarea('setting_product',isset($data->setting_product) ? $data->setting_product: '',array('class'=>'form-control tinymce_editor'))}}						
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