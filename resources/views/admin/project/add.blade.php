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
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/select2.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/bootstrap.css">
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
<script src="{{asset('assets/admin')}}/assets/js/select2/select2.full.min.js"></script>
    <script src="{{asset('assets/admin')}}/assets/js/select2/select2-custom.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/bootstrap/popper.min.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/bootstrap/bootstrap.min.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/datepicker/date-time-picker/moment.min.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/datepicker/date-time-picker/datetimepicker.custom.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/script.js"></script>
@endsection

@section("content")
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Dự án</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('dashboard-index')}}">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="{{route('view-project')}}">Dự án</a></li>
					<li class="breadcrumb-item active">Thêm</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<form class="form-wizard" method="post" action="{{route('post-add-project')}}" enctype="multipart/form-data">
		@csrf
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-bs-toggle="tab" href="#m_tabs_1" role="tab">
					<span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
					<span class="d-none d-sm-block">Nội dung chính</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#m_tabs_2" role="tab">
					<span class="d-block d-sm-none"><i class="far fa-user"></i></span>
					<span class="d-none d-sm-block">Seo</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="tab" href="#m_tabs_3" role="tab">
					<span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
					<span class="d-none d-sm-block">List ảnh</span>
				</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active " id="m_tabs_1" role="tabpanel">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								@include('admin.alert')
								<div class="row">
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Ảnh 339x603 <img id="avatar_img" src="" width="100px"/></label>	
											<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_avatar" type="file" data-img="avatar_img" data-id="avatar" data-url="{{route('dashboard-upload-one')}}" accept="image/*">
											<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_avatar">Upload file</label>
												{{Form::text('avatar','',array('class'=>'form-control input-group-air ','id'=>'avatar'))}}
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-3">
										<div class="mb-3">
											<label class="col-form-label pt-0">Khách hàng</label>
											{{Form::text('client','',array('class'=>'form-control'))}}
										</div>
									</div>
									<div class="col-12 col-lg-3">
										<div class="mb-3">
											<label class="col-form-label pt-0">Diện tích</label>
											{{Form::text('dimension','',array('class'=>'form-control'))}}
										</div>
									</div>
									<div class="col-12 col-lg-3">
										<div class="mb-3">
											<label class="col-form-label pt-0">Địa điểm</label>
											{{Form::text('address','',array('class'=>'form-control'))}}
										</div>
									</div>
									<div class="col-12 col-lg-3">
										<div class="mb-3">
											<label class="col-form-label pt-0">Loại hình</label>
											{{Form::text('type','',array('class'=>'form-control'))}}
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="col-form-label pt-0">Sản phẩm sử dụng</label>
											<select class="js-example-placeholder-multiple" name="product_id[]" multiple>
												@if(isset($product) && count($product)>0)
												@foreach($product as $item)
												<option value="{{$item->id}}">{{$item->name}}</option>												
												@endforeach												
												@endif
											</select>
										</div>
									</div>		
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="col-form-label pt-0">Tiêu đề</label>
											{{Form::text('name','',array('class'=>'form-control'))}}
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="col-form-label pt-0">Mô tả</label>
											{{Form::textarea('description','',array('class'=>'form-control'))}}
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="col-form-label pt-0">Nội dung</label>
											{{Form::textarea('content','',array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))}}
										</div>
									</div>
									
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane " id="m_tabs_2" role="tabpanel">
				<div class="row">
					<div class="col-12 col-lg-12">
						<div class="card">
							<div class="card-body">

								<div class="row">
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Seo title</label>
											{{Form::text('seo_title','',array('class'=>'form-control'))}}
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Seo description</label>
											{{Form::text('seo_description','',array('class'=>'form-control'))}}
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Seo keyword</label>
											{{Form::text('seo_keyword','',array('class'=>'form-control'))}}
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Facebook title</label>
											{{Form::text('fb_title','',array('class'=>'form-control'))}}
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Facebook description</label>
											{{Form::text('fb_description','',array('class'=>'form-control'))}}
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Ảnh</label>	
											<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_fb_image" type="file" data-id="fb_image" data-url="{{route('dashboard-upload-one')}}" accept="image/*">
											<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_fb_image">Upload file</label>
												{{Form::text('fb_image','',array('class'=>'form-control input-group-air ','id'=>'fb_image'))}}
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
			<div class="tab-pane " id="m_tabs_3" role="tabpanel">
				<div class="row">
					<div class="col-12 col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Ảnh 1 696x200 <img id="image1_img" src="" width="100px"/></label>	
											<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_image1" type="file" data-img="image1_img" data-id="image1" data-url="{{route('dashboard-upload-one')}}" accept="image/*">
											<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_image1">Upload file</label>
												{{Form::text('image1','',array('class'=>'form-control input-group-air ','id'=>'image1'))}}
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Ảnh 2 336x200 <img id="image2_img" src="" width="100px"/></label>	
											<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_image2" type="file" data-img="image2_img" data-id="image2" data-url="{{route('dashboard-upload-one')}}" accept="image/*">
											<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_image2">Upload file</label>
												{{Form::text('image2','',array('class'=>'form-control input-group-air ','id'=>'image2'))}}
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Ảnh 3 336x200 <img id="image3_img" src="" width="100px"/></label>	
											<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_image3" type="file" data-img="image3_img" data-id="image3" data-url="{{route('dashboard-upload-one')}}" accept="image/*">
											<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_image3">Upload file</label>
												{{Form::text('image3','',array('class'=>'form-control input-group-air ','id'=>'image3'))}}
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Ảnh 4 696x200 <img id="image4_img" src="" width="100px"/></label>	
											<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_image4" type="file" data-img="image4_img" data-id="image4" data-url="{{route('dashboard-upload-one')}}" accept="image/*">
											<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_image4">Upload file</label>
												{{Form::text('image4','',array('class'=>'form-control input-group-air ','id'=>'image4'))}}
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Ảnh 5 696x200 <img id="image5_img" src="" width="100px"/></label>	
											<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_image5" type="file" data-img="image5_img" data-id="image5" data-url="{{route('dashboard-upload-one')}}" accept="image/*">
											<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_image5">Upload file</label>
												{{Form::text('image5','',array('class'=>'form-control input-group-air ','id'=>'image5'))}}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-12 col-lg-12">
					<div class="mb-4">
						<button type="submit" class="btn btn-primary w-md">Thêm</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection