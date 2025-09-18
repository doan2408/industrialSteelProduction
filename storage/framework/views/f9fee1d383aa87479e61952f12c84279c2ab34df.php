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
<link rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/assets/datetimepicker/jquery.datetimepicker.css">
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
<script src="<?php echo e(asset('assets/admin')); ?>/assets/datetimepicker/jquery.datetimepicker.full.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/script.js"></script>
<script>
$('.datepicker').datetimepicker({
  timepicker:false,
  format:'d-m-Y',
});

$(document).on('click', '.removet', function() {
	$(this).parent().parent().remove();
});
$(".more").click(function(){
	if($("#serial").val()){
		const $tbody = $("#table_seri");
		let check = $("#serial").val().trim().replace(/\s*,\s*/g, ',');
		let arr = check.split(',');
		$.each(arr, function(index, item) {
			if ($tbody.find("#"+item).length === 0) {
				var html="<tr id='"+item+"'><input type='hidden' name='list_serial[]' value='"+item+"'/><input type='hidden' name='list_product[]' value='"+$("#product_id").val()+"'/><td>"+item+"</td><td>"+$("#product_id option:selected").text()+"</td><td><a class='removet' href='javascript:void(0)'>Xoá</a></td></tr>";
				$("#table_seri").append(html);				
			}
		});		
		$("#serial").val('');
	}else{
		toastr.error('Chưa nhập seri', ''); 
	}
	
});
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Đơn hàng</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?php echo e(route('view-serial')); ?>">Đơn hàng</a></li>
					<li class="breadcrumb-item active">Thêm</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<form class="form-wizard" method="post" action="<?php echo e(route('post-add-serial')); ?>" enctype="multipart/form-data">
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
									<div class="col-12 col-lg-4">
										<div class="mb-3">
											<label class="col-form-label pt-0">Mã đơn hàng</label>
											<?php echo e(Form::text('code','',array('class'=>'form-control'))); ?>

										</div>
									</div>
									<div class="col-12 col-lg-4">
										<div class="mb-3">
											<label class="col-form-label pt-0">Đại lý</label>
											<select class="js-example-placeholder-multiple" name="agency_id">
												<?php if(isset($agency) && count($agency)>0): ?>
												<?php $__currentLoopData = $agency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>													
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>												
												<?php endif; ?>
											</select>
										</div>
									</div>			
									<div class="col-12 col-lg-4">
										<div class="mb-3">
											<label class="col-form-label pt-0">Ngày bán</label>
											<?php echo e(Form::text('buy_date',date('d-m-Y'),array('class'=>'form-control datepicker'))); ?>

										</div>
									</div>
																		
								</div>
								<hr/>
								<div class="row">										
									
								</div>
								<div class="row">										
									<div class="col-12 col-lg-4">
										<div class="mb-3">
											<label class="col-form-label pt-0">Seri</label>
											<textarea class="form-control" id="serial"></textarea>
											(Nhập nhiều seri cách nhau bằng dấu ,)
										</div>
									</div>									
									<div class="col-12 col-lg-4">
										<div class="mb-3">
											<label class="col-form-label pt-0">Sản phẩm</label>
											<select class="js-example-placeholder-multiple" id="product_id">
												<?php if(isset($product) && count($product)>0): ?>
												<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>													
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>												
												<?php endif; ?>
											</select>
										</div>
									</div>	
									<div class="col-12 col-lg-4">
										<div class="mt-4">
											<button type="button" class="btn btn-primary w-md more">Thêm</button>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">										
										<div class="table-responsive">
											<table class="table">
												<thead>
													<tr>
													  <th scope="col">Seri</th>
													  <th scope="col">Sản phẩm</th>
													  <th scope="col">Xoá</th>
													</tr>
												</thead>
												<tbody id="table_seri">
													
												</tbody>
											</table>
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
						<button type="submit" class="btn btn-primary w-md">Thêm</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\baohanh\resources\views/admin/serial/add.blade.php ENDPATH**/ ?>