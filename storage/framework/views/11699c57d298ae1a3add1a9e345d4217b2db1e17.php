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
				<h3>timeline</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?php echo e(route('view-timeline')); ?>">timeline</a></li>
					<li class="breadcrumb-item active">Sửa</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<form class="form-wizard" method="post" action="<?php echo e(route('post-edit-timeline')); ?>" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
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
									
									<div class="col-12 col-lg-6">
										<div class="mb-3">
											<label class="col-form-label pt-0">Tiêu đề</label>
											<?php echo e(Form::text('name',$data->name,array('class'=>'form-control'))); ?>

										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="mb-3">
											<label class="col-form-label pt-0">Thời gian</label>
											<?php echo e(Form::text('year',date('d/m/Y',$data->year),array('class'=>'form-control datepicker-here form-control digits','data-language'=>'en'))); ?>

										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="col-form-label pt-0">Nội dung</label>
											<?php echo e(Form::textarea('content',$data->content,array('class'=>'form-control'))); ?>

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
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\htc\resources\views/admin/timeline/edit.blade.php ENDPATH**/ ?>