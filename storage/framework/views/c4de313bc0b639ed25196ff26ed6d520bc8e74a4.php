<?php $__env->startSection("title"); ?>
	<?php if(isset($check) && !empty($check)): ?>
		<?php if(isset($check->seotitle) && $check->seotitle != ''): ?>
			<?php echo e($check->seotitle); ?>

		<?php else: ?>
			<?php echo e($check->name); ?>

		<?php endif; ?>
	<?php else: ?>
		<?php echo e(App\Models\CommonModel::get_setting('setting_website_title')); ?>

	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("desc"); ?>
	<?php if(isset($check) && !empty($check)): ?>
		<?php if(isset($check->seodesc) && $check->seodesc != ''): ?>
			<?php echo e($check->seodesc); ?>

		<?php else: ?>
			<?php echo e($check->name); ?>

		<?php endif; ?>
	<?php else: ?>
		<?php echo e(App\Models\CommonModel::get_setting('setting_website_desc')); ?>

	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("keyword"); ?>
	<?php echo e(App\Models\CommonModel::get_setting('setting_website_keyword')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("css"); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/frontend')); ?>/plugins/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="<?php echo e(asset('assets/frontend')); ?>/plugins/owl-carousel/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend')); ?>/css/plugins.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend')); ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend')); ?>/css/templete.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend')); ?>/css/pubweb.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend')); ?>/plugins/revolution/revolution/css/revolution.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
<script src="<?php echo e(asset('assets/frontend')); ?>/js/jquery.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/wow/wow.js"></script>

<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/magnific-popup/magnific-popup.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/counter/waypoints-min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/counter/counterup.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/imagesloaded/imagesloaded.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/masonry/masonry-3.1.4.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/masonry/masonry.filter.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/lightgallery/js/lightgallery-all.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/scroll/scrollbar.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/js/dz.carousel.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/js/custom.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/countdown/jquery.countdown.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/rangeslider/rangeslider.js"></script>

<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?php echo e(asset('assets/frontend')); ?>/js/rev.slider.js"></script>
<script>
$("#category").change(function(){
	if($(this).val()){
		window.location.replace($(this).val());
	}
});
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("body"); ?>
no-banner
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="page-content">

	<div class="dlab-bnr-inr overlay-black-middle bg-pt">
		<div class="container">
			<div class="dlab-bnr-inr-entry">
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li><a href="<?php echo e(asset('')); ?>">Trang chủ</a></li>
						<li><?php if(isset($check) && !empty($check)): ?><?php echo e($check->name); ?><?php else: ?> Sản phẩm <?php endif; ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section-full content-inner">
		<div class="container">
			<div class="section-head text-center">
				<?php if(isset($check) && !empty($check)): ?>
				<h2 class="title"><?php echo e($check->name); ?></h2>
				
					<?php echo $check->content; ?>

				<?php else: ?>
				<h2 class="title">Sản phẩm của chúng tôi</h2>	
				<p>
					<?php echo e(App\Models\CommonModel::get_setting('setting_product')); ?>

				</p>
				<?php endif; ?>
			</div>
			<div class="row">
				<div class="col-lg-4 m-b30">
					<select id="category">
						<option value="<?php echo e(route('product')); ?>">Lọc theo danh mục</option>
						<?php if(isset($category) && count($category) > 0): ?>
						<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e(route('product_cate', $item->slug)); ?>" <?php if(isset($check) && $check->id == $item->id): ?> selected <?php endif; ?>><?php echo e($item->name); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
					</select>
				</div>
			</div>
			<div class="product-grid">
				<?php if(isset($data) && count($data) > 0): ?>
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="dlab-box service-box-2">
					<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect rotate">
						<a href="<?php echo e(route('product_detail', $item->slug)); ?>">
							<img src="<?php echo e($item->avatar); ?>" alt="<?php echo e($item->name); ?>">
						</a>
					</div>
					<div class="dlab-info">
						<h4 class="title">
							<a href="<?php echo e(route('product_detail', $item->slug)); ?>"><?php echo e($item->name); ?></a>
						</h4>
						<p><?php echo e($item->description); ?>

						</p>
						<a href="<?php echo e(route('product_detail', $item->slug)); ?>" class="link">Xem chi tiết <i class="fa-regular fa-arrow-right"></i></a>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\htc\resources\views/frontend/product/view.blade.php ENDPATH**/ ?>