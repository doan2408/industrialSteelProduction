
<?php 
$cartdata = \Cart::getContent();
?>
	
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
		<?php /**PATH F:\wamp64\www\baohanh\resources\views/frontend/cart_ajax.blade.php ENDPATH**/ ?>