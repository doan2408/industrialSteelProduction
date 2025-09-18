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
				<h3>Dự án</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?php echo e(route('view-project')); ?>">Dự án</a></li>
					<li class="breadcrumb-item active">Sửa</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<form class="form-wizard" method="post" action="<?php echo e(route('post-edit-project')); ?>" enctype="multipart/form-data">
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
						<?php echo $__env->make('admin.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<input type="hidden" name="id" value="<?php echo e($data->id); ?>"/>
							<div class="row">
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="form-label">Ảnh 339x603 <img id="avatar_img" src="<?php echo e($data->avatar); ?>" width="100px"/></label>	
										<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_avatar" type="file" data-img="avatar_img" data-id="avatar" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
										<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_avatar">Upload file</label>
											<?php echo e(Form::text('avatar',$data->avatar,array('class'=>'form-control input-group-air ','id'=>'avatar'))); ?>

										</div>
									</div>
								</div>							
								<div class="col-12 col-lg-3">
									<div class="mb-3">
										<label class="col-form-label pt-0">Khách hàng</label>
										<?php echo e(Form::text('client',$data->client,array('class'=>'form-control'))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-3">
									<div class="mb-3">
										<label class="col-form-label pt-0">Diện tích</label>
										<?php echo e(Form::text('dimension',$data->dimension,array('class'=>'form-control'))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-3">
									<div class="mb-3">
										<label class="col-form-label pt-0">Địa điểm</label>
										<?php echo e(Form::text('address',$data->address,array('class'=>'form-control'))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-3">
									<div class="mb-3">
										<label class="col-form-label pt-0">Loại hình</label>
										<?php echo e(Form::text('type',$data->type,array('class'=>'form-control'))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="col-form-label pt-0">Sản phẩm sử dụng</label>
										<select class="js-example-placeholder-multiple" name="product_id[]" multiple>
											<?php if(isset($product) && count($product)>0): ?>
											<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($item->id); ?>" <?php if(in_array($item->id,$list_p)): ?> selected <?php endif; ?>><?php echo e($item->name); ?></option>												
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>												
											<?php endif; ?>
										</select>
									</div>
								</div>		
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="form-label">Tiêu đề</label>						
										<?php echo e(Form::text('name',$data->name,array('class'=>'form-control'))); ?>						
									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="col-form-label pt-0">Mô tả</label>
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
										<label class="form-label">Ảnh <img src="<?php if(isset($data_seo->fb_image)): ?><?php echo e($data_seo->fb_image); ?><?php endif; ?>" width="100px"/></label>	
										<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_fb_image" type="file" data-id="fb_image" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
										<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_fb_image">Upload file</label>
											<?php echo e(Form::text('fb_image',isset($data_seo->fb_image)?$data_seo->fb_image:'',array('class'=>'form-control input-group-air ','id'=>'fb_image'))); ?>

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
											<label class="form-label">Ảnh 1 696x200 <img id="image1_img" src="<?php echo e($data->image1); ?>" width="100px"/></label>	
											<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_image1" type="file" data-img="image1_img" data-id="image1" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
											<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_image1">Upload file</label>
												<?php echo e(Form::text('image1',$data->image1,array('class'=>'form-control input-group-air ','id'=>'image1'))); ?>

											</div>
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Ảnh 2 336x200 <img id="image2_img" src="<?php echo e($data->image2); ?>" width="100px"/></label>	
											<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_image2" type="file" data-img="image2_img" data-id="image2" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
											<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_image2">Upload file</label>
												<?php echo e(Form::text('image2',$data->image2,array('class'=>'form-control input-group-air ','id'=>'image2'))); ?>

											</div>
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Ảnh 3 336x200 <img id="image3_img" src="<?php echo e($data->image3); ?>" width="100px"/></label>	
											<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_image3" type="file" data-img="image3_img" data-id="image3" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
											<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_image3">Upload file</label>
												<?php echo e(Form::text('image3',$data->image3,array('class'=>'form-control input-group-air ','id'=>'image3'))); ?>

											</div>
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Ảnh 4 696x200 <img id="image4_img" src="<?php echo e($data->image4); ?>" width="100px"/></label>	
											<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_image4" type="file" data-img="image4_img" data-id="image4" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
											<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_image4">Upload file</label>
												<?php echo e(Form::text('image4',$data->image4,array('class'=>'form-control input-group-air ','id'=>'image4'))); ?>

											</div>
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="mb-3">
											<label class="form-label">Ảnh 5 696x200 <img id="image5_img" src="<?php echo e($data->image5); ?>" width="100px"/></label>	
											<input style="display:none" class="form-control file_upload_server_custom" id="label_modal_image5" type="file" data-img="image5_img" data-id="image5" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
											<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_modal_image5">Upload file</label>
												<?php echo e(Form::text('image5',$data->image5,array('class'=>'form-control input-group-air ','id'=>'image5'))); ?>

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
					<button type="submit" class="btn btn-primary w-md">Cập nhật</button>
				</div>
			</div>
		</div>
	</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\htc\resources\views/admin/project/edit.blade.php ENDPATH**/ ?>