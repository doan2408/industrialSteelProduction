<?php $__env->startSection("title"); ?>
<?php echo e(App\Models\CommonModel::get_setting('setting_website_title')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("desc"); ?>
<?php echo e(App\Models\CommonModel::get_setting('setting_website_desc')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("facebooktag"); ?>
<meta property="og:url" content="<?php echo e(Request::url()); ?>" /> 
   <meta property="og:type" content="article" />   
   <meta property="og:title" content="<?php echo e(App\Models\CommonModel::get_setting('setting_website_title')); ?>" />
<meta property="og:description" content="<?php echo e(App\Models\CommonModel::get_setting('setting_website_desc')); ?>" />
   <meta property="og:image" content="<?php echo e(asset(App\Models\CommonModel::get_setting('website_logo'))); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection("css"); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/frontend')); ?>/css/jquery-ui.min.css">
<link rel="stylesheet" href="<?php echo e(asset('assets/frontend')); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo e(asset('assets/frontend')); ?>/css/fontawesome.min.css">
<link rel="stylesheet" href="<?php echo e(asset('assets/frontend')); ?>/css/swiper-bundle.min.css">
<link rel="stylesheet" href="<?php echo e(asset('assets/frontend')); ?>/css/select2.min.css">
<link rel="stylesheet" href="<?php echo e(asset('assets/frontend')); ?>/css/pubweb.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
 <script src="<?php echo e(asset('assets/frontend')); ?>/js/jquery.min.js"></script>
    <script src="<?php echo e(asset('assets/frontend')); ?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo e(asset('assets/frontend')); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('assets/frontend')); ?>/js/swiper-bundle.min.js"></script>
    <script src="<?php echo e(asset('assets/frontend')); ?>/js/select2.min.js"></script>
    <script src="<?php echo e(asset('assets/frontend')); ?>/js/main.js"></script>
<script>

$(document).on("click",'.remove-cart', function () {
	$.ajaxSetup({
	  headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});	
	$.ajax({
		url: "<?php echo e(route('delete_cart')); ?>",
		type: 'POST',
		dataType: 'json',
		data:{id:$(this).data('id')},
		success: function (data, textStatus, jqXHR) {	
			
				location.reload();			
			
		}
	});		
	
});
$(document).on("change",'.update-cart', function () {
		$.ajaxSetup({
		  headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});	
		$.ajax({
			url: "<?php echo e(route('update_cart')); ?>",
			type: 'POST',
			dataType: 'json',
			data:{id:$(this).data('id'),quantity:$(this).val()},
			success: function (data, textStatus, jqXHR) {	
				$(".html_cart")	.html(data.cart);
				$('.quick-num').text(data.span);
			}
		});		
		
	});	
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<main>
<?php 
$cartdata = \Cart::getContent();
?>
	<div class="section sec-1">
		<div class="container">
			<h2 class="title text-center">Giỏ hàng</h2>
			<div class="html_cart">
				<?php if(isset($cartdata) && count($cartdata)>0): ?>
				<div class="cart">
					<?php $__currentLoopData = $cartdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php 
						$img='';$slug='';
						if(count($item->attributes)>0){
							$slug = $item->attributes->slug;
							$img = $item->attributes->img;
							$data_attr = $item->attributes->data_attr;
						}
					?>
					<div class="cart-item">
						<a href="<?php echo e(route('product_detail',$slug)); ?>" class="cart-product">
							<div class="thumb">
								<img src="<?php echo e($img); ?>" alt="<?php echo e($item->name); ?>">
							</div>
							<h3 class="title"><?php echo e($item->name); ?> 
							<?php if(isset($data_attr['variant_name'])): ?>
							(<?php echo e($data_attr['variant_name']); ?>)
							<?php endif; ?>
							</h3>
						</a>
						<div class="cart-price">
							<?php echo e(number_format($item->price)); ?>đ
						</div>
						<div class="cart-quantity">
							<input type="number" class="form-control update-cart" min="0" data-id="<?php echo e($item->id); ?>" value="<?php echo e($item->quantity); ?>">
						</div>
						<div class="cart-remove remove-cart" data-id="<?php echo e($item->id); ?>">
							<span>
								<i class="fa-solid fa-xmark"></i>
							</span>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<div class="text-end">
					<a href="<?php echo e(route('checkout')); ?>" class="button">Thanh toán</a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php echo $__env->make('frontend.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\baohanh\resources\views/frontend/cart.blade.php ENDPATH**/ ?>