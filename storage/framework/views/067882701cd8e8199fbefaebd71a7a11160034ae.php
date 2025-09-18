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
				<h3>Khách hàng</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?php echo e(route('view-customer')); ?>">Khách hàng</a></li>
					<li class="breadcrumb-item active">Sửa</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<form class="form-wizard" method="post" action="<?php echo e(route('post-edit-customer')); ?>" enctype="multipart/form-data">
							<?php echo csrf_field(); ?>
	<!-- start page title -->
	
	<ul class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" data-bs-toggle="tab" href="#m_tabs_1" role="tab">
				<span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
				<span class="d-none d-sm-block">Nội dung chính</span>
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
										<label class="form-label">Ảnh 100x100<img id="avatar_img" src="<?php echo e($data->avatar); ?>" width="100px"/></label>	
										<input style="display:none" class="form-control file_upload_server_custom" id="label_avatar" type="file" data-img="avatar_img" data-id="avatar" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
										<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_avatar">Upload file</label>
											<?php echo e(Form::text('avatar',$data->avatar,array('class'=>'form-control input-group-air ','id'=>'avatar'))); ?>

										</div>
									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="col-form-label pt-0">Tên</label>
										<?php echo e(Form::text('name',$data->name,array('class'=>'form-control'))); ?>

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
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\htc\resources\views/admin/customer/edit.blade.php ENDPATH**/ ?>