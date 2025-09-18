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
				url: "<?php echo e(route('post-data-order')); ?>",
				type: "POST",
				data: {
					_token: $('meta[name="csrf-token"]').attr('content'),
					filter_status: filter_status,filter_agency:filter_agency
				}
			},
			"columns": [{ 
					data: 'id',
					sortable: false,
					className: 'dropdown-btn',
					"render": function ( data, type, row, meta ) {
						
							return "<i class='fa fa-arrow-down'></i>"
						
					}
				},{
					"data": null,
					sortable: false,
					"render": function(data, type, row, meta) {
						return data.code
					}
				},{
					data: 'email',
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
						if(data.tstatus==0){
							return '<a class="action_table" title="Duyệt" href="javascript:void(0)" data-url="' + data.url_active + '"><i class="fa fa-check"></i></a>'
						}else{
							return ''
						}
					}
				}
			],
			"order": [
				[4, "desc"]
			]
		});
		$.fn.dataTable.ext.errMode = 'throw';
		$('#example tbody').on('click', 'td.dropdown-btn', function () {
			var tr = $(this).closest('tr');
			var row = table.row( tr );
		 
			if ( row.child.isShown() ) {
				row.child.hide();
				tr.removeClass('shown');
			}
			else {
				var record_id = row.data().id;
				var subtable_id = "subtable-"+record_id;
				row.child( format(subtable_id) ).show();
				tr.addClass('shown');
				sub_DataTable(subtable_id,record_id);
			}
		});
	}
function sub_DataTable(table_id,record_id) {
	var subtable = $('table#'+table_id).DataTable({
		"processing": true,
		"serverSide": true,
		"serverPaging": true,
		"serverFiltering": true,
		"serverSorting": true,
		"searching": false,
		"lengthChange": false,
		"paging": true,
		"info": false,			
		ajax:  {
			url: "<?php echo e(route('post-data_child-order')); ?>",
			type: "POST",
			data: {_token: $('meta[name="csrf-token"]').attr('content'),id:record_id}
		},	
		"columns": [	
			{
				data: 'imei',
				sortable: true
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
			}
		
		],
		"order": [[0, "desc" ]]
	});
	$( subtable.table().body() )
		.addClass( 'table-detail-body' );
}
function format(table_id) {
	return '<table id="'+table_id+'" class="display table-detail table-light" border="0" style="padding-left:50px; width:100%;">'+
	'<thead>'+
	'<th>Serial</th>'+
	'<th>Số lượng</th>'+
	'<th>Thông tin kích hoạt</th>'+
	'<th>Trạng thái</th>'+
	'</thead>'+
	'</table>';
	
}
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
					<li class="breadcrumb-item"><a href="<?php echo e(route('view-order')); ?>">Đơn hàng</a></li>
					<li class="breadcrumb-item active">Danh sách</li>
				</ol>
			</div>
			<div class="col-sm-6">
				
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
							Chờ xử lý
						</option>
						<option value="1">
							Đã duyệt
						</option>
						<option value="2">
							Đã xoá
						</option>
					</select>
					
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="display" id="example">
							<thead>
								<tr>
									<th></th>
									<th>Mã đơn</th>
									<th>Tài khoản</th>
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
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\baohanh\resources\views/admin/order/view.blade.php ENDPATH**/ ?>