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
				<h3>Giao diện</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item active">Giao diện</li>
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
									<label class="form-label">Tiêu đề website</label>						
									<?php echo e(Form::text('setting_website_title',isset($data->setting_website_title) ? $data->setting_website_title: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Mô tả website</label>						
									<?php echo e(Form::text('setting_website_desc',isset($data->setting_website_desc) ? $data->setting_website_desc: '',array('class'=>'form-control'))); ?>						
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
									<?php echo e(Form::select('website_menu', $arrmenu,$check,['class'=>'form-control m-input m-input--square'])); ?>	
							
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
									<?php echo e(Form::select('website_menu1', $arrmenu,$check,['class'=>'form-control m-input m-input--square'])); ?>	
							
								</div>
							</div>	
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Nội dung nhà phân phối trang chủ</label>						
									<?php echo e(Form::text('setting_website_brand',isset($data->setting_website_brand) ? $data->setting_website_brand: '',array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Nội dung bảo hành trang chủ</label>						
									<?php echo e(Form::text('setting_website_about',isset($data->setting_website_about) ? $data->setting_website_about: '',array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Nội dung trang kích hoạt bảo hành</label>						
									<?php echo e(Form::text('setting_website_guarantee',isset($data->setting_website_guarantee) ? $data->setting_website_guarantee: '',array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Nội dung trang tra cứu bảo hành</label>						
									<?php echo e(Form::text('setting_website_history',isset($data->setting_website_history) ? $data->setting_website_history: '',array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Nội dung thông báo trang tra cứu bảo hành</label>						
									<?php echo e(Form::text('setting_website_history1',isset($data->setting_website_history1) ? $data->setting_website_history1: '',array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Nội dung trang gia hạn bảo hành</label>						
									<?php echo e(Form::text('setting_website_extend',isset($data->setting_website_extend) ? $data->setting_website_extend: '',array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Nội dung quét qr</label>						
									<?php echo e(Form::text('setting_website_qr',isset($data->setting_website_qr) ? $data->setting_website_qr: '',array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>						
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
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\baohanh\resources\views/admin/setting/website.blade.php ENDPATH**/ ?>