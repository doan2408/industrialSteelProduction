@extends("admin.layout.hometemplate")


@section('title', 'Admin & Dashboard')
@section('desc', 'Admin & Dashboard')
@section('keyword', 'Admin & Dashboard')

@section("css")
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/fontawesome.css">
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/icofont.css">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/themify.css">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/flag-icon.css">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/feather-icon.css">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/datatables.css">
<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/bootstrap.css">
<!-- App css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/style.css">
<link id="color" rel="stylesheet" href="{{asset('assets/admin')}}/assets/css/color-1.css" media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/assets/css/responsive.css">
@endsection
@section("js")
<script src="{{asset('assets/admin')}}/assets/js/jquery-3.5.1.min.js"></script>
<!-- feather icon js-->
<script src="{{asset('assets/admin')}}/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="{{asset('assets/admin')}}/assets/js/sidebar-menu.js?v=1"></script>
<script src="{{asset('assets/admin')}}/assets/js/config.js"></script>
<!-- Bootstrap js-->
<script src="{{asset('assets/admin')}}/assets/js/bootstrap/popper.min.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/bootstrap/bootstrap.min.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/admin')}}/assets/js/datatable/datatables/datatable.custom.js"></script>
<!-- Plugins JS start-->
<script src="{{asset('assets/admin')}}/assets/js/tooltip-init.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('assets/admin')}}/assets/js/script.js"></script>
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
				url: "{{route('post-data-contact')}}",
				type: "POST",
				data: {
					_token: $('meta[name="csrf-token"]').attr('content')
				}
			},
			"columns": [{
					data: "name"
				},{
					data: "email"
				},{
					data: "phone"
				},{
					data: "content"
				},
				{
					data: 'created_at',
					sortable: true
				},
				{
					"data": null,
					sortable: false,
					"render": function(data, type, row, meta) {
						
					
							return '<a class="action_table" title="Xóa" href="javascript:void(0)" data-url="' + data.url_delete + '"><i class="fa fa-trash-o"></i></a>'
					
					}
				}
			],
			"order": [
				[4, "desc"]
			]
		});
		$.fn.dataTable.ext.errMode = 'throw';

	}
</script>
@endsection

@section("content")
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Liên hệ</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('dashboard-index')}}">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="{{route('view-contact')}}">Liên hệ</a></li>
					<li class="breadcrumb-item active">Danh sách</li>
				</ol>
			</div>
			<div class="col-sm-6">
				<!-- Bookmark Start-->
				
				<!-- Bookmark Ends-->
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
									<th>Họ tên</th>
									<th>Email</th>
									<th>SĐT</th>
									<th>Nội dung</th>
									<th>Thời gian</th>
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

@endsection