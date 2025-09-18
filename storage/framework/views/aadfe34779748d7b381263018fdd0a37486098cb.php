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
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/jscolor.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/script.js"></script>
<script>
$(document).on("click",'.add_value', function () {
	$.ajaxSetup({
	  headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});
	if($("#name").val()){
		$.ajax({
			url: "<?php echo e(route('post-add_value-attributes')); ?>",
			type: 'POST',
			data:{name:$("#name").val(),id:$("#id").val()},
			dataType: 'json',
			success: function (data, textStatus, jqXHR) {
				if(data.check==1){
					$("#table_attribute").html(data.html);
					$("#name").val('');
				}else{
					toastr.error(data.content, ''); 
				}
				
			}
		});	
	}else{
		toastr.error('Chưa nhập tên', ''); 
	}
});
$(document).on("click",'.edit_value', function () {
	$("#modal_id").val($(this).data('id'));
	$.ajaxSetup({
	  headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});
	$.ajax({
		url: "<?php echo e(route('post-get_value-attributes')); ?>",
		type: 'POST',
		data:{attribute_value_id:$(this).data('id')},
		dataType: 'json',
		success: function (data, textStatus, jqXHR) {
			if(data.check==1){
				$("#modal_name").val(data.name);
			}else{
				toastr.error(data.content, ''); 
			}
			
		}
	});		
});
$(document).on("click",'.modal_btn', function () {
	$.ajaxSetup({
	  headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});
	if($("#modal_name").val()){
		$.ajax({
			url: "<?php echo e(route('post-update_value-attributes')); ?>",
			type: 'POST',
			data:{name:$("#modal_name").val(),attribute_value_id:$("#modal_id").val(),id:$("#id").val()},
			dataType: 'json',
			success: function (data, textStatus, jqXHR) {
				if(data.check==1){
					$("#table_attribute").html(data.html);
					$("#exampleModal").modal('hide');
				}else{
					toastr.error(data.content, ''); 
				}
				
			}
		});	
	}else{
		toastr.error('Chưa nhập tên', ''); 
	}
});
$(document).on("click",'.delete_value', function () {
	$.ajaxSetup({
	  headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});
	$.ajax({
		url: "<?php echo e(route('post-delete_value-attributes')); ?>",
		type: 'POST',
		data:{attribute_value_id:$(this).data('id'),id:$("#id").val()},
		dataType: 'json',
		success: function (data, textStatus, jqXHR) {
			if(data.check==1){
				$("#table_attribute").html(data.html);
			}else{
				toastr.error(data.content, ''); 
			}
			
		}
	});		
});
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="">Sửa giá trị </h5>
			<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
				<form id="modal_form5">
				<input type="hidden" id="modal_id"/>
				<div class="row">								
					<div class="col-12 col-lg-12">
						<div class="mb-3">
							<label class="form-label">Tên</label>				
							<input type="text" class="form-control" value="" id="modal_name"/>
											
						</div>
					</div>
				</div>
				</form>
		  </div>
		  <div class="modal-footer">
			<button class="btn btn-secondary modal_btn" type="button">Cập nhật</button>
		  </div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Thuộc tính</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?php echo e(route('view-attributes')); ?>">Thuộc tính</a></li>
					<li class="breadcrumb-item active">Sửa</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<form class="form-wizard" method="post" action="<?php echo e(route('post-edit-attributes')); ?>" enctype="multipart/form-data">
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
							<input type="hidden" name="id" id="id" value="<?php echo e($data->id); ?>"/>
							
							<div class="row">									
								<div class="col-12 col-lg-6">
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
		<hr/>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Giá trị thuộc tính</h5>
						<div class="row">									
							<div class="col-12 col-lg-6">
								<div class="mb-3">
									<label class="col-form-label pt-0">Tên</label>
									<input type="text" id="name" class="form-control"/>
								</div>
							</div>	
							<div class="col-12 col-lg-4">
								<div class="mt-4">
									<button type="button" class="btn btn-primary w-md add_value">Thêm </button>
								</div>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
									  <th scope="col">Tên</th>
									  <th scope="col">Xoá</th>
									</tr>
								</thead>
								<tbody id="table_attribute">
									<?php if(isset($values) && count($values)>0): ?>
									<?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									
									<tr>
										<td><?php echo e($item->attribute_value); ?>

										
										</td>							
										<td>
											<a href="javascript:void(0)" class="edit_value" data-bs-toggle="modal" data-original-title="edit" data-bs-target="#exampleModal" data-id="<?php echo e($item->id); ?>">Sửa</a>  |<a href="javascript:void(0)" class="delete_value" data-id="<?php echo e($item->id); ?>"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
									
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\baohanh\resources\views/admin/attributes/edit.blade.php ENDPATH**/ ?>