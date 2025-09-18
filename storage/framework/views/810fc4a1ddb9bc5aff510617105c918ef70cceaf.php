<?php $__env->startSection('title', 'Admin & Dashboard'); ?>
<?php $__env->startSection('desc', 'Admin & Dashboard'); ?>
<?php $__env->startSection('keyword', 'Admin & Dashboard'); ?>

<?php $__env->startSection("css"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/fontawesome.css">
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/icofont.css">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/themify.css">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/flag-icon.css">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/feather-icon.css">
<!-- Plugins css start-->
<!-- Plugins css Ends-->
<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/select2.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/bootstrap.css">
<!-- App css-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/style.css">
<link id="color" rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/assets/css/color-1.css" media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/responsive.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection("js"); ?>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/jquery-3.5.1.min.js"></script>
<!-- feather icon js-->
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/sidebar-menu.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/config.js"></script>
<!-- Bootstrap js-->
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/select2/select2.full.min.js"></script>
    <script src="<?php echo e(asset('assets/admin')); ?>/assets/js/select2/select2-custom.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/bootstrap/popper.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/datepicker/date-time-picker/moment.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/datepicker/date-time-picker/datetimepicker.custom.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/script.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Trang</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?php echo e(route('view-page')); ?>">Trang</a></li>
					<li class="breadcrumb-item active">Sửa</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<form class="form-wizard" method="post" action="<?php echo e(route('post-edit-page')); ?>" enctype="multipart/form-data">
							<?php echo csrf_field(); ?>
	<!-- start page title -->
	
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
	</ul>	
	<div class="tab-content">
		<div class="tab-pane active " id="m_tabs_1" role="tabpanel">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-body">
						<?php echo $__env->make('admin.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<input type="hidden" name="id" value="<?php echo e($data->id); ?>"/>
							
							<div class="row">	
								
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="form-label">Tiêu đề</label>						
										<?php echo e(Form::text('name',$data->name,array('class'=>'form-control'))); ?>						
									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="form-label">Mô tả</label>						
										<?php echo e(Form::textarea('description',$data->description,array('class'=>'form-control'))); ?>						
									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="col-form-label pt-0">Nội dung</label>
										<?php echo e(Form::textarea('content',$data->content,array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>

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
										<?php echo e(Form::text('seo_title',isset($data_seo->seo_title)?$data_seo->seo_title:'',array('class'=>'form-control'))); ?>						
									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="form-label">Seo description</label>						
										<?php echo e(Form::text('seo_description',isset($data_seo->seo_description)?$data_seo->seo_description:'',array('class'=>'form-control'))); ?>						
									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="form-label">Seo keyword</label>						
										<?php echo e(Form::text('seo_keyword',isset($data_seo->seo_keyword)?$data_seo->seo_keyword:'',array('class'=>'form-control'))); ?>						
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="form-label">Facebook title</label>						
										<?php echo e(Form::text('fb_title',isset($data_seo->fb_title)?$data_seo->fb_title:'',array('class'=>'form-control'))); ?>						
									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="form-label">Facebook description</label>						
										<?php echo e(Form::text('fb_description',isset($data_seo->fb_description)?$data_seo->fb_description:'',array('class'=>'form-control'))); ?>						
									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="form-label">Facebook image</label>
										<?php if(isset($data_seo->fb_image) && $data_seo->fb_image!=''): ?>
										<div class="fileinput fileinput-exists" data-provides="fileinput">
											<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
												<img src="<?php echo e(asset('assets/admin')); ?>/assets/images/noimage.png" alt="" /> </div>
											<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> 
												<img src="<?php echo e($data_seo->fb_image); ?>" style="max-height: 140px;"/>
											</div>
											<div>
												<span class="btn default btn-file">
													<span class="fileinput-new"> Chọn ảnh </span>
													<span class="fileinput-exists"> Đổi ảnh </span>
													<input type="file" name="fb_image"> <input type="hidden" name="hidden_fb_image" value="<?php echo e($data_seo->fb_image); ?>"/></span>
												<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Xóa </a>
											</div>
										</div>			
										<?php else: ?> 
										<div class="fileinput fileinput-new" data-provides="fileinput">
											<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
												<img src="<?php echo e(asset('assets/admin')); ?>/assets/images/noimage.png" alt="" /> </div>
											<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
											<div>
												<span class="btn default btn-file">
													<span class="fileinput-new"> Chọn ảnh </span>
													<span class="fileinput-exists"> Đổi ảnh </span>
													<input type="file" name="fb_image"> <input type="hidden" name="hidden_fb_image" value=""/></span>
												<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Xóa </a>
											</div>
										</div>				
										<?php endif; ?>							
										
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
					<button type="submit" class="btn btn-primary w-md">Cập nhật</button>
				</div>
			</div>
		</div>
	</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\htc\resources\views/admin/page/edit.blade.php ENDPATH**/ ?>