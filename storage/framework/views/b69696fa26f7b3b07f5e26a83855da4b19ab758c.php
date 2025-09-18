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
				<h3>Profile</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item active">Profile</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<form class="form-wizard" method="post" action="<?php echo e(route('dashboard-profile-post')); ?>" enctype="multipart/form-data">
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
								<div class="row">
									<div class="col-12 col-lg-6">
										<div class="mb-3">
											<?php if(isset(\Auth::user()->avatar) && \Auth::user()->avatar!=''): ?>
											<div class="fileinput fileinput-exists" data-provides="fileinput">
												<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
													<img src="<?php echo e(asset('assets/admin')); ?>/assets/images/noimage.png" alt="" /> </div>
												<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> 
													<img src="<?php echo e(\Auth::user()->avatar); ?>" style="max-height: 140px;"/>
												</div>
												<div>
													<span class="btn default btn-file">
														<span class="fileinput-new"> Chọn ảnh </span>
														<span class="fileinput-exists"> Đổi ảnh </span>
														<input type="file" name="images"> <input type="hidden" name="hidden_images" value="<?php echo e(\Auth::user()->avatar); ?>"/></span>
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
														<input type="file" name="images"> <input type="hidden" name="hidden_images" value=""/></span>
													<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Xóa </a>
												</div>
											</div>				
											<?php endif; ?>		
										</div>
									</div>

								</div>

								<div class="row">
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="col-form-label pt-0">Email</label>
											<?php echo e(Form::text('email',\Auth::user()->email,array('class'=>'form-control'))); ?>

										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="col-form-label pt-0">Mật khẩu</label>
											<input type="password" class="form-control" name="password" placeholder="Để trống nếu không thay đổi"/>
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="col-form-label pt-0">Họ tên</label>
											<?php echo e(Form::text('name',\Auth::user()->name,array('class'=>'form-control'))); ?>

										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="col-form-label pt-0">Số điện thoại</label>
											<?php echo e(Form::text('phone',\Auth::user()->phone,array('class'=>'form-control'))); ?>

										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="col-form-label pt-0">Ngày sinh</label>
											<input value="<?php echo e(date('d/m/Y',\Auth::user()->dob)); ?>" class="datepicker-here form-control digits" type="text" data-language="en" name="dob" readonly>											
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
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\htc\resources\views/admin/profile.blade.php ENDPATH**/ ?>