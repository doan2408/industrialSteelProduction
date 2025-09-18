


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
<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/sidebar-menu.js"></script>
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

<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/menu.js"></script>
<script>
	fill_datatable();
	function fill_datatable() {
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
				url: "<?php echo e(route('post-data-menu')); ?>",
				type: "POST",
				data: {
					_token: $('meta[name="csrf-token"]').attr('content')
				}
			},
			"columns": [{
					data: "name"
				},
				{
					data: 'created_at',
					sortable: true
				},
				{
					"data": null,
					sortable: false,
					"render": function(data, type, row, meta) {
					
                        return '<a class="" title="Sửa" href="' + data.url_edit + '"><i class="fa fa-pencil"></i></a> | <a class="action_table" title="Xóa" href="javascript:void(0)" data-url="' + data.url_delete + '"><i class="fa fa-trash-o"></i></a>'
					
					}
				}
			],
			"order": [
				[1, "desc"]
			]
		});
		$.fn.dataTable.ext.errMode = 'throw';

	}
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Thêm menu</h5>
				
			</div>
			<div class="modal-body">
				<form method="POST" action="<?php echo e(route('post-quick-menu')); ?>" class="m-form m-form--label-align-left- m-form--state-" id="m_form_cate">
				<?php echo csrf_field(); ?>
					<div class="form-group">
						<label class="form-control-label">Tên:</label>
						<input type="text" name="name_modal" class="form-control">
					</div>				
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
				<button type="button" class="btn btn-primary" onclick="addquickmodal('m_form_cate', 'm_modal_1')">Thêm</button>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Menu</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?php echo e(route('view-menu')); ?>">Menu</a></li>
					<li class="breadcrumb-item active">Danh sách</li>
				</ol>
			</div>
			<div class="col-sm-6">
				<a href="#" data-bs-toggle="modal" data-original-title="test" data-bs-target="#m_modal_1" class="btn btn-primary w-md">Thêm</a>
				
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="display" id="example">
							<thead>
								<tr>
									<th>Tiêu đề</th>
									<th>Khởi tạo</th>
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
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\htc\resources\views/admin/menu/view.blade.php ENDPATH**/ ?>