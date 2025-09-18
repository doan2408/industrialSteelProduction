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
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/date-picker.css">
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
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/bootstrap/popper.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/script.js"></script>
<script>

</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Ảnh/logo</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item active">Ảnh/logo</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<form class="form-wizard" method="post" action="<?php echo e(route('post-dashboard-setting')); ?>" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
	
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<?php echo $__env->make('admin.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

						<div class="row">
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Logo <img src="<?php if(isset($data->website_logo)): ?><?php echo e($data->website_logo); ?><?php endif; ?>" width="100px" id="img_website_logo"/></label>	
									<input style="display:none" class="form-control file_upload_server_custom" id="label_website_logo" type="file" data-img="img_website_logo" data-id="website_logo" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
									<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_website_logo">Upload file</label>
										<?php echo e(Form::text('website_logo',isset($data->website_logo) ? $data->website_logo: '',array('class'=>'form-control input-group-air ','id'=>'website_logo'))); ?>

									</div>
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Ảnh nền trang chủ 2560x1268 <img src="<?php if(isset($data->website_banner1)): ?><?php echo e($data->website_banner1); ?><?php endif; ?>" id="img_website_banner1" width="100px"/></label>	
									<input style="display:none" class="form-control file_upload_server_custom" id="label_website_banner1" type="file" data-id="website_banner1" data-img="img_website_banner1" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
									<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_website_banner1">Upload file</label>
										<?php echo e(Form::text('website_banner1',isset($data->website_banner1) ? $data->website_banner1: '',array('class'=>'form-control input-group-air ','id'=>'website_banner1'))); ?>

									</div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\baohanh\resources\views/admin/setting/image.blade.php ENDPATH**/ ?>