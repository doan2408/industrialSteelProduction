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
<script>
$("#type_banner").change(function(){
	$(".type_banner").hide();
	if($(this).val()==1){
		$(".type_banner1").show();
		$(".type_banner2").hide();
	}else if($(this).val()==2){
		$(".type_banner1").show();
		$(".type_banner2").show();
	}else if($(this).val()==3){
		$(".type_banner1").show();
		$(".type_banner2").show();
	}
});
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Thương hiệu</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?php echo e(route('view-brand')); ?>">Thương hiệu</a></li>
					<li class="breadcrumb-item active">Sửa</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<form class="form-wizard" method="post" action="<?php echo e(route('post-edit-brand')); ?>" enctype="multipart/form-data">
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
				<span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
				<span class="d-none d-sm-block">Quảng cáo</span>
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
										<label class="form-label">Ảnh 300x300<img id="avatar_img" src="<?php echo e($data->avatar); ?>" width="100px"/></label>	
										<input style="display:none" class="form-control file_upload_server_custom" id="label_avatar" type="file" data-img="avatar_img" data-id="avatar" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
										<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_avatar">Upload file</label>
											<?php echo e(Form::text('avatar',$data->avatar,array('class'=>'form-control input-group-air ','id'=>'avatar'))); ?>

										</div>
									</div>
								</div>
								<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Banner 600x300 <img id="avatar_img" src="<?php echo e($data->banner); ?>" width="100px"/></label>	
											<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_banner" type="file" data-id="banner" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
											<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_banner">Upload file</label>
												<?php echo e(Form::text('banner',$data->banner,array('class'=>'form-control input-group-air ','id'=>'banner'))); ?>

											</div>
										</div>
									</div>	
								<div class="col-12 col-lg-6">
									<div class="mb-3">
										<label class="col-form-label pt-0">Tên</label>
										<?php echo e(Form::text('name',$data->name,array('class'=>'form-control'))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-3">
										<div class="mb-3">
											<label class="col-form-label pt-0">Thứ tự</label>
											<?php echo e(Form::number('position',$data->position,array('class'=>'form-control'))); ?>

										</div>
									</div>
								<div class="col-12 col-lg-3">
										<div class="mb-3">
											<label class="col-form-label pt-0">Kiểu hiển thị</label>
											<select class="js-example-placeholder-multiple" name="type">												
												<option value="0" <?php if($data->type==0): ?> selected <?php endif; ?>>Slide</option>
												<option value="1" <?php if($data->type==1): ?> selected <?php endif; ?>>list sp , tiêu đề trên</option>
												<option value="2" <?php if($data->type==2): ?> selected <?php endif; ?>>list sp , tiêu đề trái</option>
												<option value="3" <?php if($data->type==3): ?> selected <?php endif; ?>>list sp , banner trên</option>
											</select>
										</div>
									</div>				
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="col-form-label pt-0">Mô tả</label>
										<?php echo e(Form::textarea('description',$data->description,array('class'=>'form-control'))); ?>

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
								<div class="col-12 col-lg-3">
									<div class="mb-3">
										<label class="col-form-label pt-0">Kiểu hiển thị</label>
										<select class="js-example-placeholder-multiple" name="type_banner" id="type_banner">												
											<option value="0" <?php if($data->type_banner==0): ?> selected <?php endif; ?>>Không hiển thị</option>
											<option value="1" <?php if($data->type_banner==1): ?> selected <?php endif; ?>>Text trái - video phải</option>
											<option value="2" <?php if($data->type_banner==2): ?> selected <?php endif; ?>>2 ảnh trái - video phải</option>
											<option value="3" <?php if($data->type_banner==3): ?> selected <?php endif; ?>>2 ảnh phải - video trái</option>
										</select>
									</div>
								</div>	
							</div>
							<hr/>
							<div class="row type_banner type_banner1" <?php if($data->type_banner==0): ?>style="display:none" <?php endif; ?>>
								<div class="col-12 col-lg-6">
									<div class="mb-3">
										<label class="form-label">Video (Tối đa 10mb)</label>	
										<input style="display:none" class="form-control file_upload_server" id="label_video" type="file" data-id="video" data-url="<?php echo e(route('dashboard-upload-file')); ?>" accept="video/*">
										<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_video">Upload file</label>
											<?php echo e(Form::text('video',$data->video,array('class'=>'form-control input-group-air ','id'=>'video'))); ?>

										</div>
									</div>
								</div>
								<div class="col-12 col-lg-6">
									<div class="mb-3">
										<label class="col-form-label pt-0">URL</label>
										<?php echo e(Form::text('url_video',$data->url_video,array('class'=>'form-control'))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="col-form-label pt-0">Nội dung</label>
										<?php echo e(Form::text('text_video',$data->text_video,array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>

									</div>
								</div>
							</div>
							<div class="row type_banner type_banner2" <?php if($data->type_banner<2): ?>style="display:none" <?php endif; ?>>
								<div class="col-12 col-lg-6">
									<div class="mb-3">
										<label class="form-label">Ảnh 1 425x300<img id="banner1_img" src="<?php echo e($data->banner1); ?>" width="100px"/></label>	
										<input style="display:none" class="form-control file_upload_server_custom" id="label_banner1" type="file" data-img="banner1_img" data-id="banner1" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
										<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_banner1">Upload file</label>
											<?php echo e(Form::text('banner1',$data->banner1,array('class'=>'form-control input-group-air ','id'=>'banner1'))); ?>

										</div>
									</div>
								</div>
								<div class="col-12 col-lg-6">
									<div class="mb-3">
										<label class="col-form-label pt-0">URL</label>
										<?php echo e(Form::text('url_banner1',$data->url_banner1,array('class'=>'form-control'))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="col-form-label pt-0">Nội dung</label>
										<?php echo e(Form::text('text_banner1',$data->text_banner1,array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-6">
									<div class="mb-3">
										<label class="form-label">Ảnh 2 425x300<img id="banner2_img" src="<?php echo e($data->banner2); ?>" width="100px"/></label>	
										<input style="display:none" class="form-control file_upload_server_custom" id="label_banner2" type="file" data-img="banner2_img" data-id="banner2" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
										<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_banner2">Upload file</label>
											<?php echo e(Form::text('banner2',$data->banner2,array('class'=>'form-control input-group-air ','id'=>'banner2'))); ?>

										</div>
									</div>
								</div>
								<div class="col-12 col-lg-6">
									<div class="mb-3">
										<label class="col-form-label pt-0">URL</label>
										<?php echo e(Form::text('url_banner2',$data->url_banner2,array('class'=>'form-control'))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="col-form-label pt-0">Nội dung</label>
										<?php echo e(Form::text('text_banner2',$data->text_banner2,array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>

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
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\baohanh\resources\views/admin/brand/edit.blade.php ENDPATH**/ ?>