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
<style>
.fa-warning{
	color:red;
}
</style>
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
$(document).ready(function () {	
	$(document).on("click",'.images_row', function () {
		$("#return_img").val($(this).data('id'));
		$(".image_upload_multi_content1").html('');
	});
	
	$(".btn-attr").click(function(){
		$.ajaxSetup({
			  headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  }
			});
		let list_attributes=[];
		
		$('.select_attribute').each(function () {		
			if($(this).val()!=0){
				list_attributes.push($(this).val());
			}
		});
		if(list_attributes.length>0){
			if($("#sku").val()){
				$.ajax({
					url: "<?php echo e(route('post-attributes-product')); ?>",
					type: 'POST',
					dataType: 'json',
					data: {list_attributes:list_attributes,id:$("#id").val(),price:$("#price").val(),pprice:$("#pprice").val(),sku:$("#sku").val()},	
					success: function (msg, textStatus, jqXHR) {
						if(msg.check==0){
							toastr.error(msg.content, ''); 
						}else{				
							$("#table_attribute").prepend(msg.content);
						}
					}
				});
			}else{
				toastr.error('Chưa nhập sku', ''); 
			}
		}else{
			toastr.error('Chưa chọn thuộc tính', ''); 
		}
	});
	$(document).on("click",'.remove_row', function () {
		let t=$(this);
		$.ajaxSetup({
		  headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});
		$.ajax({
			url: "<?php echo e(route('post-remove_attribute-product')); ?>",
			type: 'POST',
			dataType: 'html',
			data: {id:$(this).data('id')},	
			success: function (msg, textStatus, jqXHR) {
				t.parent().parent().remove();
			}
		});
		
	});
	$(document).on("change",'.price_input', function () {
		let t=$(this);
		$.ajaxSetup({
		  headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});
		$.ajax({
			url: "<?php echo e(route('post-change_price-product')); ?>",
			type: 'POST',
			dataType: 'json',
			data: {id:$(this).data('id'),type:$(this).data('type'),value:$(this).val()},	
			success: function (msg, textStatus, jqXHR) {
				if(msg.check==0){
					toastr.error(msg.content, ''); 
				}
			}
		});
		
	});
	$(document).on("click",'.madd', function () {
		let list_img=[];
		$(".mimage").each(function(){
			list_img.push($(this).val());
		});
		$.ajaxSetup({
		  headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});
		if(list_img.length>0){
			$.ajax({
				url: "<?php echo e(route('post-add_images-product')); ?>",
				type: 'POST',
				dataType: 'json',
				data: {id:$('#return_img').val(),list_img:list_img},	
				success: function (msg, textStatus, jqXHR) {
					if(msg.check==0){
						toastr.error(msg.content, ''); 
					}else{				
						
						$(".div_list_img"+$('#return_img').val()).html(msg.content);						
						$("#exampleModal").modal('hide');
					}
				}
			});
		}else{
			toastr.error('Chưa chọn ảnh', ''); 
		}
	});
	$(document).on("click",'.rimg', function () {
		let id=$(this).data('id');
		$.ajaxSetup({
		  headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});
		$.ajax({
			url: "<?php echo e(route('post-remove_images-product')); ?>",
			type: 'POST',
			dataType: 'json',
			data: {id:id,value:$(this).data('value')},	
			success: function (msg, textStatus, jqXHR) {
				if(msg.check==0){
					toastr.error(msg.content, ''); 
				}else{				
					$(".div_list_img"+id).html(msg.content);	
				}
			}
		});
		
	});
	$(document).on("click",'.add_attributes', function () {
		
		$.ajaxSetup({
		  headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});
		$.ajax({
			url: "<?php echo e(route('add_attributes')); ?>",
			type: 'POST',
			dataType: 'json',
			data: {name:$("#modal_name").val(),parent:$("#modal_parent").val()},	
			success: function (msg, textStatus, jqXHR) {
				if(msg.check==0){
					toastr.error(msg.content, ''); 
				}else{
					$(".list_attributes").html(msg.content);
					$(".js-example-placeholder-multiple").select2();
					$("#exampleModal1").modal('hide');
					$("#modal_name").val('');
					$("#modal_parent").val(0).trigger('change.select2');
				}
			}
		});
		
	});
});
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="modal fade" id="exampleModal1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="">Thêm thuộc tính </h5>
			<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
				<form id="modal_form5">
				<div class="row">								
					<div class="col-12 col-lg-12">
						<div class="mb-3">
							<label class="form-label">Tên</label>				
							<input type="text" class="form-control" value="" id="modal_name"/>
											
						</div>
					</div>
					<div class="col-12 col-lg-12">
						<div class="mb-3">
							<label class="col-form-label pt-0">Cha</label>
							<select class="js-example-placeholder-multiple" id="modal_parent">
								<option value="0">Không chọn</option>			
								<?php if(isset($attributes) && count($attributes)>0): ?>
								<?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>											
								<option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>										
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>												
								<?php endif; ?>
							</select>
							(Không chọn cha -> thuộc tính, chọn -> giá trị của thuộc tính)
						</div>
					</div>
				</div>
				</form>
		  </div>
		  <div class="modal-footer">
			<button class="btn btn-secondary add_attributes" type="button">Thêm</button>
		  </div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Thêm ảnh</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			
				<input type="hidden" id="return_img"/>
				<div class="row">
					<div class="col-12 col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="btn btn btn-sm btn-brand m-btn m-btn--icon m-btn--pill m-btn--wide btn_upload_multi1">
									<span class="btn btn-primary">
										Thêm list ảnh
									</span>
								</div>
								<input data-upload-url="<?php echo e(route('dashboard-upload-temp')); ?>" id="file_select_image_multi1" type="file" multiple name="file_select_image_multi1" accept="image/*" style="display:none">					
								<div class="image_upload_multi_content1 row">									
								</div>
							</div>

						</div>
					</div>
				</div>			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary madd">Thêm</button>
			</div>
		</div>
	</div>
</div>

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
	
	<ul class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" data-bs-toggle="tab" href="#m_tabs_1" role="tab">
				<span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
				<span class="d-none d-sm-block">Nội dung chính</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-bs-toggle="tab" href="#m_tabs_4" role="tab">
				<span class="d-block d-sm-none"><i class="far fa-user"></i></span>
				<span class="d-none d-sm-block">Thuộc tính</span>
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
				<span class="d-none d-sm-block">List ảnh 500x500</span>
			</a>
		</li>
	</ul>	
	<div class="tab-content">
		<div class="tab-pane " id="m_tabs_4" role="tabpanel">
			<div class="row">
				<div class="col-12 col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="alert alert-danger dark alert-dismissible fade show" role="alert" bis_skin_checked="1"><strong>Lưu ý </strong> 
								Các biến thể cần nhập đủ số loại thuộc tính đã chọn, cần nhập tối thiểu 1 biến thể
								<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
							</div>
							<h5 class="card-title">Thuộc tính <a href="javascript:void(0)" class="btn btn-primary w-md" data-bs-toggle="modal" data-bs-target="#exampleModal1">Thêm</a></h5>
							<div class="row list_attributes">
								<?php if(isset($attributes) && count($attributes)>0): ?>
								<?php $i=0; ?>
								<?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-12 col-lg-3">
									<div class="mb-3">
										<label class="col-form-label pt-0"><?php echo e($item->name); ?></label>
										<select class="js-example-placeholder-multiple select_attribute" data-id="<?php echo e($item->id); ?>">
											<option value="0">Chọn dữ liệu</option>			
											<?php if(isset($values[$i]) && count($values[$i])>0): ?>
											<?php $__currentLoopData = $values[$i]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>											
											<option value="<?php echo e($item1->id); ?>"><?php echo e($item1->attribute_value); ?></option>										
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>												
											<?php endif; ?>
										</select>
									</div>
								</div>
								<?php $i++; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>
							</div>
							<hr/>
							<div class="row mt-3">
								<div class="col-12 col-lg-3">
									<div class="mb-3">
										<label class="col-form-label pt-0">SKU</label>
										<input type="text" id="sku" class="form-control"/>
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 col-lg-12">
									<div class="mb-4">
										<a href="javascript:void(0)" class="btn btn-primary w-md btn-attr">Thêm biến thể</a>
									</div>
								</div>
							</div>
							<hr/>
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
										  <th scope="col" style="width:15%">Tên</th>
										  <th scope="col">SKU</th>
										  <th scope="col" style="width:50%">Ảnh</th>
										  <th scope="col">Giá</th>
										  <th scope="col">Giá khuyến mại</th>
										  <th scope="col">Xoá</th>
										</tr>
									</thead>
									<tbody id="table_attribute">
										<?php if(isset($product_variants) && count($product_variants)>0): ?>
											<?php $i=0; ?>
										<?php $__currentLoopData = $product_variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php 
										$warning='';
										if(count(explode('-',$item->variant_key)) != count($usedAttributeCount)){
											$warning='<i title="Biến thể không hợp lệ" class="fa fa-warning"></i>';
										}
										?>
										<tr>
											<td>
											<?php if(isset($name_variants[$i])): ?>
											<?php echo e($name_variants[$i]); ?> <?php echo $warning; ?> 
											<?php endif; ?>
											</td>
											<td>
											<input type="text" value="<?php echo e($item->sku); ?>" class="form-control price_input" data-type="sku" data-id="<?php echo e($item->id); ?>"/>
											</td>
											<td>
											<a href="javascript:void(0)" class="images_row" data-id="<?php echo e($item->id); ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Thêm ảnh</a>
											<input type="hidden" class="list_img list_img<?php echo e($item->id); ?>">
											<div class="div_list_img<?php echo e($item->id); ?> row">
												<?php if($item->images!=''): ?>
												<?php $__currentLoopData = explode(',',$item->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<div class="col-12 col-lg-1">
													<img src="<?php echo e($img); ?>" width="100%"/>
													<a href="javascript:void(0)" class="rimg" data-id="<?php echo e($item->id); ?>" data-value="<?php echo e($img); ?>">Xoá</a>
												</div>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<?php endif; ?>
											</div>
											</td>
											<td><input type="text" class="form-control price_input mask_number" data-type="price" data-id="<?php echo e($item->id); ?>" value="<?php echo e(number_format($item->price)); ?>"></td>
											<td><input type="text" class="form-control price_input mask_number" data-type="pprice" data-id="<?php echo e($item->id); ?>" value="<?php echo e(number_format($item->pprice)); ?>"></td>
											<td><a href="javascript:void(0)" data-id="<?php echo e($item->id); ?>" class="remove_row">Xoá</a></td>
										</tr>
										<?php $i++; ?>
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
		<div class="tab-pane active " id="m_tabs_1" role="tabpanel">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-body">
						<?php echo $__env->make('admin.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<input type="hidden" id="id" name="id" value="<?php echo e($data->id); ?>"/>
							<div class="row">	
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="form-label">Ảnh 360x360<img id="avatar_img" src="<?php echo e($data->avatar); ?>" width="100px"/></label>	
										<input style="display:none" class="form-control file_upload_server_custom" id="label_avatar" type="file" data-w="360" data-h="360" data-img="avatar_img" data-id="avatar" data-url="<?php echo e(route('dashboard-upload-one')); ?>" accept="image/*">
										<div class="input-group"><label style="margin-bottom:0px;" class="input-group-text" for="label_avatar">Upload file</label>
											<?php echo e(Form::text('avatar',$data->avatar,array('class'=>'form-control input-group-air ','id'=>'avatar'))); ?>

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
										<label class="col-form-label pt-0">Sản phẩm liên quan</label>
										<select class="js-example-placeholder-multiple" name="product_id[]" multiple>
											<?php if(isset($product) && count($product)>0): ?>
											<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($item->id); ?>" <?php if(in_array($item->id,explode(',',$data->list_p))): ?> selected <?php endif; ?>><?php echo e($item->name); ?></option>												
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>												
											<?php endif; ?>
										</select>
									</div>
								</div>		
								
								<div class="col-12 col-lg-2">
									<div class="mb-3">
										<label class="col-form-label pt-0">Giá</label>
										<?php echo e(Form::text('price',number_format($data->price),array('class'=>'form-control mask_number','id'=>'price'))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-2">
									<div class="mb-3">
										<label class="col-form-label pt-0">Giá khuyến mại</label>
										<?php echo e(Form::text('pprice',number_format($data->pprice),array('class'=>'form-control mask_number','id'=>'pprice'))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-2">
									<div class="mb-3">
										<label class="col-form-label pt-0">Hạn bảo hành (tháng)</label>
										<?php echo e(Form::number('guarantee',$data->guarantee,array('class'=>'form-control'))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-3">
									<div class="mb-3">
										<label class="col-form-label pt-0">Thương hiệu</label>
										<select class="js-example-placeholder-multiple" name="brand_id">
											<?php if(isset($brand) && count($brand)>0): ?>
											<?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($item->id); ?>" <?php if($data->brand_id == $item->id): ?> selected <?php endif; ?>><?php echo e($item->name); ?></option>												
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>												
											<?php endif; ?>
										</select>
									</div>
								</div>		
								<div class="col-12 col-lg-3">
									<div class="mb-3">
										<label class="col-form-label pt-0">Tag hiển thị</label>
										<select class="js-example-placeholder-multiple" name="quick_tag">
											<option value="0" <?php if($data->quick_tag == 0): ?> selected <?php endif; ?>>Không chọn</option>												
											<option value="1" <?php if($data->quick_tag == 1): ?> selected <?php endif; ?>>Pre-order</option>												
											<option value="2" <?php if($data->quick_tag == 2): ?> selected <?php endif; ?>>Mới</option>												
										</select>
									</div>
								</div>	
								<div class="col-12 col-lg-8">
									<div class="mb-3">
										<label class="col-form-label pt-0">Tiêu đề</label>
										<?php echo e(Form::text('name',$data->name,array('class'=>'form-control'))); ?>

									</div>
								</div>								
								<div class="col-12 col-lg-12">
									<div class="mb-3">
										<label class="col-form-label pt-0">Mô tả</label>
										<?php echo e(Form::text('description',$data->description,array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-6">
									<div class="mb-3">
										<label class="col-form-label pt-0">Nội dung</label>
										<?php echo e(Form::text('content',$data->content,array('class'=>'form-control tinymce_editor','data-upload-url'=>route('dashboard-upload-multi')))); ?>

									</div>
								</div>
								<div class="col-12 col-lg-6">
									<div class="mb-3">
										<label class="col-form-label pt-0">Thông số kỹ thuật</label>
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
<?php echo $__env->make("admin.layout.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\baohanh\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>