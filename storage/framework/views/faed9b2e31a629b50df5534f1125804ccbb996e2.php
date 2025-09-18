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
							<h3>Section 1</h3>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Banner 1920x650 <img src="<?php if(isset($data->website_banner1)): ?><?php echo e($data->website_banner1); ?><?php endif; ?>" width="100px" id="img_website_banner1"/></label>	
									<input style="display:none" class="form-control file_upload_server_custom" id="label_website_banner1" type="file" data-img="img_website_banner1" data-id="website_banner1" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
									<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_website_banner1">Upload file</label>
										<?php echo e(Form::text('website_banner1',isset($data->website_banner1) ? $data->website_banner1: '',array('class'=>'form-control input-group-air ','id'=>'website_banner1'))); ?>

									</div>
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Video banner</label>	
									<input style="display:none" class="form-control file_upload_server_custom" id="label_website_video" type="file" data-id="website_video" data-url="<?php echo e(route('dashboard-upload-file')); ?>" accept="video/*">
									<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_website_video">Upload file</label>
										<?php echo e(Form::text('website_video',isset($data->website_video) ? $data->website_video: '',array('class'=>'form-control input-group-air ','id'=>'website_video'))); ?>

									</div>
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Text banner</label>						
									<?php echo e(Form::text('setting_website_home1',isset($data->setting_website_home1) ? $data->setting_website_home1: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<hr/>
							<h3>Section 2</h3>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Text nhỏ</label>						
									<?php echo e(Form::text('setting_website_home2',isset($data->setting_website_home2) ? $data->setting_website_home2: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Text to</label>						
									<?php echo e(Form::text('setting_website_home3',isset($data->setting_website_home3) ? $data->setting_website_home3: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Nội dung</label>						
									<?php echo e(Form::textarea('setting_website_home4',isset($data->setting_website_home4) ? $data->setting_website_home4: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Ảnh 1 340x596 <img src="<?php if(isset($data->website_banner2)): ?><?php echo e($data->website_banner2); ?><?php endif; ?>" width="100px" id="img_website_banner2"/></label>	
									<input style="display:none" class="form-control file_upload_server_custom" id="label_website_banner2" type="file" data-img="img_website_banner2" data-id="website_banner2" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
									<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_website_banner2">Upload file</label>
										<?php echo e(Form::text('website_banner2',isset($data->website_banner2) ? $data->website_banner2: '',array('class'=>'form-control input-group-air ','id'=>'website_banner2'))); ?>

									</div>
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Ảnh 2 260x195 <img src="<?php if(isset($data->website_banner3)): ?><?php echo e($data->website_banner3); ?><?php endif; ?>" width="100px" id="img_website_banner3"/></label>	
									<input style="display:none" class="form-control file_upload_server_custom" id="label_website_banner3" type="file" data-img="img_website_banner3" data-id="website_banner3" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
									<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_website_banner3">Upload file</label>
										<?php echo e(Form::text('website_banner3',isset($data->website_banner3) ? $data->website_banner3: '',array('class'=>'form-control input-group-air ','id'=>'website_banner3'))); ?>

									</div>
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Ảnh 3 490x276 <img src="<?php if(isset($data->website_banner4)): ?><?php echo e($data->website_banner4); ?><?php endif; ?>" width="100px" id="img_website_banner4"/></label>	
									<input style="display:none" class="form-control file_upload_server_custom" id="label_website_banner4" type="file" data-img="img_website_banner4" data-id="website_banner4" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
									<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_website_banner4">Upload file</label>
										<?php echo e(Form::text('website_banner4',isset($data->website_banner4) ? $data->website_banner4: '',array('class'=>'form-control input-group-air ','id'=>'website_banner4'))); ?>

									</div>
								</div>
							</div>
							<hr/>
							<h3>Section 3</h3>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Text to</label>						
									<?php echo e(Form::text('setting_website_home5',isset($data->setting_website_home5) ? $data->setting_website_home5: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Text nhỏ</label>						
									<?php echo e(Form::text('setting_website_home6',isset($data->setting_website_home6) ? $data->setting_website_home6: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<hr/>
							<h3>Section 4</h3>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Tiêu đề</label>						
									<?php echo e(Form::text('setting_website_home7',isset($data->setting_website_home7) ? $data->setting_website_home7: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Mô tả</label>						
									<?php echo e(Form::textarea('setting_website_home8',isset($data->setting_website_home8) ? $data->setting_website_home8: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<hr/>
							<h3>Section 5</h3>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Tiêu đề</label>						
									<?php echo e(Form::text('setting_website_home9',isset($data->setting_website_home9) ? $data->setting_website_home9: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Mô tả</label>						
									<?php echo e(Form::textarea('setting_website_home10',isset($data->setting_website_home10) ? $data->setting_website_home10: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<hr/>
							<h3>Section 6</h3>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Tiêu đề</label>						
									<?php echo e(Form::text('setting_website_home11',isset($data->setting_website_home11) ? $data->setting_website_home11: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<hr/>
							<h3>Section 7</h3>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Tiêu đề</label>						
									<?php echo e(Form::text('setting_website_home12',isset($data->setting_website_home12) ? $data->setting_website_home12: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Mô tả</label>						
									<?php echo e(Form::textarea('setting_website_home13',isset($data->setting_website_home13) ? $data->setting_website_home13: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<hr/>
							<h3>Section 8</h3>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Ảnh 1 931x540 <img src="<?php if(isset($data->website_banner5)): ?><?php echo e($data->website_banner5); ?><?php endif; ?>" width="100px" id="img_website_banner5"/></label>	
									<input style="display:none" class="form-control file_upload_server_custom" id="label_website_banner5" type="file" data-img="img_website_banner5" data-id="website_banner5" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
									<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_website_banner5">Upload file</label>
										<?php echo e(Form::text('website_banner5',isset($data->website_banner5) ? $data->website_banner5: '',array('class'=>'form-control input-group-air ','id'=>'website_banner5'))); ?>

									</div>
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Text nhỏ</label>						
									<?php echo e(Form::text('setting_website_home14',isset($data->setting_website_home14) ? $data->setting_website_home14: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Text to</label>						
									<?php echo e(Form::text('setting_website_home15',isset($data->setting_website_home15) ? $data->setting_website_home15: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Link</label>						
									<?php echo e(Form::text('setting_website_home16',isset($data->setting_website_home16) ? $data->setting_website_home16: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Ảnh 2 465x260 <img src="<?php if(isset($data->website_banner6)): ?><?php echo e($data->website_banner6); ?><?php endif; ?>" width="100px" id="img_website_banner6"/></label>	
									<input style="display:none" class="form-control file_upload_server_custom" id="label_website_banner6" type="file" data-img="img_website_banner6" data-id="website_banner6" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
									<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_website_banner6">Upload file</label>
										<?php echo e(Form::text('website_banner6',isset($data->website_banner6) ? $data->website_banner6: '',array('class'=>'form-control input-group-air ','id'=>'website_banner6'))); ?>

									</div>
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Text nhỏ</label>						
									<?php echo e(Form::text('setting_website_home17',isset($data->setting_website_home17) ? $data->setting_website_home17: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Text to</label>						
									<?php echo e(Form::text('setting_website_home18',isset($data->setting_website_home18) ? $data->setting_website_home18: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Link</label>						
									<?php echo e(Form::text('setting_website_home19',isset($data->setting_website_home19) ? $data->setting_website_home19: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Ảnh 3 465x260 <img src="<?php if(isset($data->website_banner7)): ?><?php echo e($data->website_banner7); ?><?php endif; ?>" width="100px" id="img_website_banner7"/></label>	
									<input style="display:none" class="form-control file_upload_server_custom" id="label_website_banner7" type="file" data-img="img_website_banner7" data-id="website_banner7" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
									<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_website_banner7">Upload file</label>
										<?php echo e(Form::text('website_banner7',isset($data->website_banner7) ? $data->website_banner7: '',array('class'=>'form-control input-group-air ','id'=>'website_banner7'))); ?>

									</div>
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Text nhỏ</label>						
									<?php echo e(Form::text('setting_website_home20',isset($data->setting_website_home20) ? $data->setting_website_home20: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Text to</label>						
									<?php echo e(Form::text('setting_website_home21',isset($data->setting_website_home21) ? $data->setting_website_home21: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Link</label>						
									<?php echo e(Form::text('setting_website_home22',isset($data->setting_website_home22) ? $data->setting_website_home22: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<hr/>
							<h3>Section 9</h3>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Tiêu đề</label>						
									<?php echo e(Form::text('setting_website_home23',isset($data->setting_website_home23) ? $data->setting_website_home23: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Mô tả</label>						
									<?php echo e(Form::textarea('setting_website_home24',isset($data->setting_website_home24) ? $data->setting_website_home24: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<hr/>
							<h3>Section 10</h3>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Tiêu đề</label>						
									<?php echo e(Form::text('setting_website_home25',isset($data->setting_website_home25) ? $data->setting_website_home25: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Mô tả</label>						
									<?php echo e(Form::textarea('setting_website_home26',isset($data->setting_website_home26) ? $data->setting_website_home26: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<hr/>
							<h3>Section 11</h3>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Tiêu đề</label>						
									<?php echo e(Form::text('setting_website_home27',isset($data->setting_website_home27) ? $data->setting_website_home27: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Mô tả</label>						
									<?php echo e(Form::textarea('setting_website_home28',isset($data->setting_website_home28) ? $data->setting_website_home28: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<hr/>
							<h3>Section 12</h3>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Text to</label>						
									<?php echo e(Form::text('setting_website_home29',isset($data->setting_website_home29) ? $data->setting_website_home29: '',array('class'=>'form-control'))); ?>						
								</div>
							</div>
							<div class="col-12 col-lg-12">
								<div class="mb-3">
									<label class="form-label">Text nhỏ</label>						
									<?php echo e(Form::text('setting_website_home30',isset($data->setting_website_home30) ? $data->setting_website_home30: '',array('class'=>'form-control'))); ?>						
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
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\htc\resources\views/admin/setting/home.blade.php ENDPATH**/ ?>