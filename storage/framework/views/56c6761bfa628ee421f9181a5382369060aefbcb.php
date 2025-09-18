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
				<h3>Sản phẩm</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?php echo e(route('view-product')); ?>">Sản phẩm</a></li>
					<li class="breadcrumb-item active">Sửa</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<form class="form-wizard" method="post" action="<?php echo e(route('post-edit-product')); ?>" enctype="multipart/form-data">
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
				<span class="d-none d-sm-block">List ảnh (Ảnh vuông)</span>
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
										<label class="form-label">Ảnh 319x179<img id="avatar_img" src="<?php echo e($data->avatar); ?>" width="100px"/></label>	
										<input style="display:none" class="form-control file_upload_server_custom" id="label_avatar" type="file" data-img="avatar_img" data-id="avatar" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
										<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_avatar">Upload file</label>
											<?php echo e(Form::text('avatar',$data->avatar,array('class'=>'form-control input-group-air ','id'=>'avatar'))); ?>

										</div>
									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="form-label">File pdf</label>	
										<input style="display:none" class="form-control file_upload_server_custom" id="label_pdf" type="file" data-id="pdf" data-url="<?php echo e(route('dashboard-upload-file')); ?>" accept="pdf/*">
										<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_pdf">Upload file</label>
											<?php echo e(Form::text('pdf',$data->pdf,array('class'=>'form-control input-group-air ','id'=>'pdf'))); ?>

										</div>
									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="col-form-label pt-0">Danh mục</label>
										<select class="js-example-placeholder-multiple" name="cate_id[]" multiple>
											<?php if(isset($category) && count($category)>0): ?>
											<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php if($item->parent==0): ?>
											<option value="<?php echo e($item->id); ?>" <?php if(in_array($item->id,$selected)): ?> selected <?php endif; ?>><?php echo e($item->name); ?></option>
												<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php if($item1->parent==$item->id): ?>
												<option value="<?php echo e($item1->id); ?>" <?php if(in_array($item1->id,$selected)): ?> selected <?php endif; ?>>-<?php echo e($item1->name); ?></option>	
												<?php endif; ?>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
											<?php endif; ?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>												
											<?php endif; ?>
										</select>
									</div>
								</div>
								
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="col-form-label pt-0">Tiêu đề</label>
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
										<label class="col-form-label pt-0">Chi tiết</label>
										<?php echo e(Form::text('content',$data->content,array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="col-form-label pt-0">Ứng dụng sản phẩm</label>
										<?php echo e(Form::text('used',$data->used,array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="col-form-label pt-0">Thông số</label>
										<?php echo e(Form::text('specification',$data->specification,array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>

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
								<div class="btn btn btn-sm btn-brand m-btn m-btn--icon m-btn--pill m-btn--wide btn_upload_multi">
									<span class="btn btn-primary">
										Thêm
									</span>
								</div>
								<input data-upload-url="<?php echo e(route('dashboard-upload-temp')); ?>" id="file_select_image_multi" type="file" multiple name="file_select_image_multi" accept="image/*" style="display:none">					
								<div class="image_upload_multi_content row">
									<?php if($data->images!=''): ?>
									<?php $__currentLoopData = explode(',',$data->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-12 col-lg-3 image_insert_caption">										
										<img class="content-img" style="width: 100%;" src="<?php echo e($item); ?>">
										<input type="hidden" value="<?php echo e($item); ?>" name="image_upload_multi_file[]">							
										<div data-repeater-delete="" class="btn-sm btn btn-danger m-btn m-btn--icon m-btn--pill" onclick="$(this).closest('.image_insert_caption').remove();"><span>Xóa</span></div>									
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>
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
	
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\htc\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>