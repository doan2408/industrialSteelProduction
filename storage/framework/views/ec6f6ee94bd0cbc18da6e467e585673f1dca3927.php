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
<style type="text/css">

	.dd { position: relative; display: block; margin: 0; padding: 0; list-style: none; font-size: 13px; line-height: 20px; }

	.dd-list { display: block; position: relative; margin: 0; padding: 0; list-style: none; }
	.dd-list .dd-list { padding-left: 30px; }
	.dd-collapsed .dd-list { display: none; }

	.dd-item,
	.dd-empty,
	.dd-placeholder { display: block; position: relative; margin: 0; padding: 0; min-height: 20px; font-size: 13px; line-height: 20px; }

	.dd-handle { display: block;
				 height: 30px;
				 margin: 5px 0; 
				 padding: 4px 10px; 
				 color: #333; text-decoration: none; font-weight: bold; border: 1px solid #ccc;
				 background: #F5F6F7;
				 -webkit-border-radius: 3px;
				 border-radius: 3px;
				 box-sizing: border-box; -moz-box-sizing: border-box;
	}


	.dd-item > button { display: block; position: relative; cursor: pointer; float: left; width: 25px; height: 20px; margin: 5px 0; padding: 0; text-indent: 100%; white-space: nowrap; overflow: hidden; border: 0; background: transparent; font-size: 12px; line-height: 1; text-align: center; font-weight: bold; }
	.dd-item > button:before { content: '+'; display: block; position: absolute; width: 100%; text-align: center; text-indent: 0; }
	.dd-item > button[data-action="collapse"]:before { content: '-'; }

	.dd-placeholder,
	.dd-empty { margin: 5px 0; padding: 0; min-height: 30px; background: #f2fbff; border: 1px dashed #b6bcbf; box-sizing: border-box; -moz-box-sizing: border-box; }
	.dd-empty { border: 1px dashed #bbb; min-height: 100px; background-color: #e5e5e5;
				background-image: -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
					-webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
				background-image:    -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
					-moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
				background-image:         linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
					linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
				background-size: 60px 60px;
				background-position: 0 0, 30px 30px;
	}

	.dd-dragel { position: absolute; pointer-events: none; z-index: 9999; }
	.dd-dragel > .dd-item .dd-handle { margin-top: 0; }
	.dd-dragel .dd-handle {
		-webkit-box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
		box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
	}

	.action_menu .fa:first-child {
		margin-right: 5px;
	}
	.action_menu {
		border-left: 1px solid #ccc;
		float: right;
		width: 80px;
		padding-left: 20px;
	}
	.link_menu {
		border-left: 1px solid #ccc;
		float: right;
		padding: 0 5px 0px 15px;
		white-space: nowrap;
		width: 220px;
		overflow: hidden;
	}
	@media (max-width: 768px){

		.link_menu {
			display: none;
		}  
	}
	.dd3-content { display: block; height: 30px; margin: 5px 0; padding: 5px 10px 5px 40px; color: #333; text-decoration: none; font-weight: bold; border: 1px solid #ccc;
				   background: #fafafa;
				   background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
				   background:    -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
				   background:         linear-gradient(top, #fafafa 0%, #eee 100%);
				   -webkit-border-radius: 3px;
				   border-radius: 3px;
				   box-sizing: border-box; -moz-box-sizing: border-box;
	}
	.dd3-content:hover {background: #fff; }

	.dd-dragel > .dd3-item > .dd3-content { margin: 0; }

	.dd3-item > button { margin-left: 30px; }

	.dd3-handle { position: absolute; margin: 0; left: 0; top: 0; cursor: pointer; width: 30px; text-indent: 100%; white-space: nowrap; overflow: hidden;
				  border: 1px solid #1DB399;
				  background: #23d4b5;
				  border-top-right-radius: 0;
				  border-bottom-right-radius: 0;
	}
	.dd3-handle:before { content: '≡'; display: block; position: absolute; left: 0; top: 3px; width: 100%; text-align: center; text-indent: 0; color: #fff; font-size: 20px; font-weight: normal; }
	.dd3-handle:hover { background: #23d4b5; }
</style>
<script>
    var url_delete = "<?php echo e(route('post-delete-product-cate')); ?>";
    var url_update_position = "<?php echo e(route('post-update-product-cate')); ?>";
</script>
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
<script>

</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3>Nhóm sản phẩm</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-index')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?php echo e(route('view-product-cate')); ?>">Nhóm sản phẩm</a></li>
					<li class="breadcrumb-item active">Danh sách</li>
				</ol>
			</div>
			<div class="col-sm-6">
					<a href="<?php echo e(route('add-product-cate')); ?>" class="btn btn-primary w-md">Thêm</a>
			
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<?php echo $__env->make('admin.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<div class="row">
						<div class="col-lg-12">
							<div class="dd nestable" id="nestable">
								<ol class="dd-list">
									<?php
									foreach ($data as $item) {
										if ($item->parent == 0) {
											?>
											<li class="dd-item dd3-item" data-id="<?php echo e($item->id); ?>">
												<div class="dd-handle dd3-handle"></div>
												<div class="dd3-content">
									

													 <?php echo e(\Str::limit($item->name,40,'...')); ?>

													<span class="action_menu">
														<a href="<?php echo e(route('edit-product-cate',$item->id)); ?>" class=""><i class="fa fa-pencil"></i></a>
														<a href="javascript:void(0);" class="delete_row_table" data-id="<?php echo e($item->id); ?>"><i class="fa fa-trash"></i></a>     
													</span>
													
											</div>
												<?php
												$check_child_1 = 0;
												foreach ($data as $item_check) {
													if ($item_check->parent == $item->id) {
														$check_child_1++;
													}
												}
												if ($check_child_1 > 0) {
													echo '<ol class="dd-list">';
													foreach ($data as $item1) {													
														if ($item1->parent == $item->id) {
															?>
														<li class="dd-item dd3-item" data-id="<?php echo e($item1->id); ?>">
															<div class="dd-handle dd3-handle"></div>
															<div class="dd3-content">
																<?php echo e(\Str::limit($item1->name,40,'...')); ?>

																<span class="action_menu">
																	<a href="<?php echo e(route('edit-product-cate',$item1->id)); ?>" class=""><i class="fa fa-pencil"></i></a>
																	<a href="javascript:void(0);" class="delete_row_table" data-id="<?php echo e($item1->id); ?>"><i class="fa fa-trash"></i></a>     
																</span>
																
															</div>
															<?php
															$check_child_2 = 0;
															foreach ($data as $item_check1) {
																if ($item_check1->parent == $item1->id) {
																	$check_child_2++;
																}
															}
															if ($check_child_2 > 0) {
																echo '<ol class="dd-list">';
																foreach ($data as $item2) {
																	if ($item2->parent == $item1->id) {
																		?>
																	<li class="dd-item dd3-item" data-id="<?php echo e($item2->id); ?>">
																		<div class="dd-handle dd3-handle"></div>
																		<div class="dd3-content">
																			<?php echo e(\Str::limit($item2->name,40,'...')); ?>

																			<span class="action_menu">
																				<a href="<?php echo e(route('edit-product-cate',$item2->id)); ?>" class=""><i class="fa fa-pencil"></i></a>
																				<a href="javascript:void(0);" class="delete_row_table" data-id="<?php echo e($item2->id); ?>"><i class="fa fa-trash"></i></a>
																			</span>
																		
																		</div>
																	</li>
																	<?php
																}
															}
															echo '</ol>';
														}
														?>
														</li>
														<?php
													}
												}
												echo '</ol>';
											}
											?>
											</li>
											<?php
										}	
																			
									}
									?>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\htc\resources\views/admin/product/category/view.blade.php ENDPATH**/ ?>