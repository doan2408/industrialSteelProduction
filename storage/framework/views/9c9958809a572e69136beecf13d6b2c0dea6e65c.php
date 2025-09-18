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
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/datatables.css">
<!-- Bootstrap css-->
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
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/sidebar-menu.js?v=1"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/config.js"></script>
<!-- Bootstrap js-->
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/bootstrap/popper.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/datatable/datatables/datatable.custom.js"></script>
<!-- Plugins JS start-->
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/tooltip-init.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/script.js"></script>
<script>
$(document).on("change",'.change_imei', function () {
	$.ajaxSetup({
	  headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});	
	$.ajax({
		url: "<?php echo e(route('post-imei-serial')); ?>",
		type: 'POST',
		dataType: 'json',
		data:{id:$(this).data('id'),imei:$(this).val()},
		success: function (data, textStatus, jqXHR) {	
			if(data.check==0){
				toastr.error(data.content, ''); 
			}else{
				toastr.success(data.content, ''); 
			}	
			
		}
	});		
});
	fill_datatable();
	$("#filter_status").change(function() {
		$('#example').DataTable().destroy();
		fill_datatable($("#filter_status").val(),$("#filter_agency").val());
	});
	$("#filter_agency").change(function() {
		$('#example').DataTable().destroy();
		fill_datatable($("#filter_status").val(),$("#filter_agency").val());
	});
	function fill_datatable(filter_status = '',filter_agency='') {
		var table = $('#example').DataTable({
			"processing": true,
			"serverSide": true,
			"serverPaging": true,
			"serverFiltering": true,
			"serverSorting": true,
			"paging": true,
			"info": true,
			createdRow: function(row, data, dataIndex) {
				$(row).addClass('table-row');
			},
			"fnDrawCallback": function(oSettings) {
				if (oSettings._iDisplayLength == -1 || oSettings._iDisplayLength > oSettings.fnRecordsDisplay()) {
					$('.dataTables_paginate').hide();
				} else {
					$('.dataTables_paginate').show();
				}

			},
			ajax: {
				url: "<?php echo e(route('post-data-serial')); ?>",
				type: "POST",
				data: {
					_token: $('meta[name="csrf-token"]').attr('content'),
					filter_status: filter_status,filter_agency:filter_agency
				}
			},
			"columns": [{
					"data": null,
					sortable: false,
					"render": function(data, type, row, meta) {
						return data.imei
					}
				},{
					"data": null,
					sortable: false,
					"render": function(data, type, row, meta) {
						return data.code
					}
				},{
					data: 'pname',
					sortable: false
				},{
					data: 'info',
					sortable: false
				},
				{
					data: 'status',
					sortable: false
				},
				{
					data: 'buy_date',
					sortable: true
				},
				{
					"data": null,
					sortable: false,
					"render": function(data, type, row, meta) {
						
							return ''
						
					}
				}
			],
			"order": [
				[5, "desc"]
			]
		});
		$.fn.dataTable.ext.errMode = 'throw';

	}

</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Serial</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?php echo e(route('view-serial')); ?>">Serial</a></li>
					<li class="breadcrumb-item active">Danh sách</li>
				</ol>
			</div>
			<div class="col-sm-6">
				<a href="<?php echo e(route('add-serial')); ?>" class="btn btn-primary w-md">Thêm</a>
				
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="row mb-3">
				<div class="col-12 col-lg-3">
					<select id="filter_status" class="form-select">
						<option value="all">Trạng thái</option>

						<option value="0">
							Chưa kích hoạt
						</option>
						<option value="1">
							Đã kích hoạt
						</option>
					</select>
					
				</div>
				<div class="col-12 col-lg-3">
					<select id="filter_agency" class="form-select">
						<option value="all">Đại lý</option>
						<?php if(isset($agency) && count($agency)>0): ?>
						<?php $__currentLoopData = $agency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($item->id); ?>">
						<?php echo e($item->name); ?>

						</option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
					</select>
					
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="display" id="example">
							<thead>
								<tr>
									<th>Serial</th>
									<th>Mã đơn</th>
									<th>Sản phẩm</th>
									<th>Thông tin kích hoạt</th>
									<th>Trạng thái</th>
									<th>Ngày mua</th>
									<th>Phím chức năng</th>
								</tr>
							</thead>
							<tbody class="">


							</tbody>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\baohanh\resources\views/admin/serial/view.blade.php ENDPATH**/ ?>