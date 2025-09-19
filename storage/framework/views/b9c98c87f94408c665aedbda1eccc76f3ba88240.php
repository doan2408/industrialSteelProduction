

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
	fill_datatable();
	$("#filter_status").change(function() {
		$('#example').DataTable().destroy();
		fill_datatable($("#filter_status").val());
	});

	function fill_datatable(filter_status = 'all') {
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
				url: "<?php echo e(route('post-data-student')); ?>",
				type: "POST",
				data: {
					_token: $('meta[name="csrf-token"]').attr('content'),
					filter_status: filter_status
				}
			},
			"columns": [
				{ data: "full_name" },
				{ data: 'age' },
				{ data: 'class_name' },
				{ data: 'email' },
				{ 
					"data": "tstatus",
					"render": function(data, type, row, meta) {
						return data == 1 ? 'Hoạt động' : 'Không hoạt động';
					}
				},
				{
					"data": null,
					sortable: false,
					"render": function(data, type, row, meta) {
						var actions = '<a class="" title="Sửa" href="' + data.url_edit + '"><i class="fa fa-pencil"></i></a>';
						
						// if (data.tstatus == 0) { //  - Không hoạt động - hiện cả 2 nút
						// 	// actions += ' | <a class="action_table" title="Duyệt" href="javascript:void(0)" data-url="' + data.url_active + '"><i class="fa fa-check"></i></a>';
						// 	actions += ' | <a class="action_table" title="Xóa" href="javascript:void(0)" data-url="' + data.url_delete + '"><i class="fa fa-trash-o"></i></a>';
						// } else if (data.tstatus == 1) { // Hoạt động - chỉ hiện nút Xóa
							actions += ' | <a class="action_table" title="Xóa" href="javascript:void(0)" data-url="' + data.url_delete + '"><i class="fa fa-trash-o"></i></a>';
						// }
						
						return actions;
					}
				}
			],
			"order": [[0, "desc"]] // Sắp xếp theo cột đầu tiên (Tên) giảm dần
		});
		$.fn.dataTable.ext.errMode = 'throw';
	}
	
	$(document).on('click', '.action_table', function(e) {
		e.preventDefault();
		var url = $(this).data('url');
		var title = $(this).attr('title');
		
		if (confirm('Bạn có chắc chắn muốn ' + title.toLowerCase() + ' sinh viên này?')) {
			$.ajax({
				url: url,
				type: 'POST',
				data: {
					_token: $('meta[name="csrf-token"]').attr('content')
				},
				success: function(response) {
					// Reload DataTable để hiển thị thay đổi
					$('#example').DataTable().ajax.reload();
					alert('Thao tác ' + title.toLowerCase() + ' thành công!');},
				error: function(xhr) {
					alert('Có lỗi xảy ra! Vui lòng thử lại.');
					console.log(xhr.responseText);
				}
			});
		}
	});
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Sinh viên</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?php echo e(route('view-student')); ?>">Sinh viên</a></li>
					<li class="breadcrumb-item active">Danh sách</li>
				</ol>
			</div>
			<div class="col-sm-6">
				<a href="<?php echo e(route('add-student')); ?>" class="btn btn-primary w-md">Thêm</a>
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
						<option value="0">Không hoạt động</option>
						<option value="1">Hoạt động</option>
					</select>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="display" id="example">
							<thead>
								<tr>
									<th>Tên</th>
									<th>Tuổi</th>
									<th>Lớp học</th>
									<th>Email</th>
                                    <th>Trạng thái</th>
									<th>Phím chức năng</th>
								</tr>
							</thead>
							<tbody class="">
								<!-- DataTable sẽ load data qua AJAX -->
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\htc\resources\views/admin/students/view.blade.php ENDPATH**/ ?>