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
						<li>Liên hệ</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section-full content-inner bg-white contact-style-1">
		<div class="container">
			<div class="row">
				<div class="col-md-6 d-flex m-b30">
					<div class="p-a30 border contact-area border-1 align-self-stretch radius-sm">
						<h3 class="m-b30">Thông tin liên hệ</h3>
						<ul class="no-margin">
							<li class="icon-bx-wraper left m-b30">
								<div class="icon-bx-xs border-1">
									<i class="fa-solid fa-location-dot"></i>
								</div>
								<div class="icon-content">
									<h6 class="text-uppercase m-tb0 dlab-tilte">Địa chỉ nhà máy số 1:</h6>
									<a href="<?php echo e(App\Models\CommonModel::get_setting('setting_map1')); ?>" target="_blank"><?php echo e(App\Models\CommonModel::get_setting('setting_address1')); ?></a>
									<h6 class="text-uppercase m-tb0 dlab-tilte">Địa chỉ nhà máy số 2:</h6>
									<a href="<?php echo e(App\Models\CommonModel::get_setting('setting_map2')); ?>" target="_blank"><?php echo e(App\Models\CommonModel::get_setting('setting_address2')); ?></a>
								</div>
							</li>
							<li class="icon-bx-wraper left m-b30">
								<div class="icon-bx-xs border-1">
									<i class="fa-solid fa-envelope"></i>
								</div>
								<div class="icon-content">
									<h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
									<p><a href="mailto:<?php echo e(App\Models\CommonModel::get_setting('setting_email')); ?>"><?php echo e(App\Models\CommonModel::get_setting('setting_email')); ?></a>
									</p>
								</div>
							</li>
							<li class="icon-bx-wraper left m-b30">
								<div class="icon-bx-xs border-1">
									<i class="fa-solid fa-phone"></i>
								</div>
								<div class="icon-content">
									<h6 class="text-uppercase m-tb0 dlab-tilte">Hotline:</h6>
									<p><a href="tel:<?php echo e(App\Models\CommonModel::get_setting('setting_phone')); ?>"><?php echo e(App\Models\CommonModel::get_setting('setting_phone')); ?></a></p>
								</div>
							</li>
							<li class="icon-bx-wraper left">
								<div class="icon-bx-xs border-1">
									<i class="fa-regular fa-square-list"></i>
								</div>
								<div class="icon-content">
									<h6 class="text-uppercase m-tb0 dlab-tilte">Các phòng ban:</h6>
									<div class="grid-content">
										<?php if(isset($data) && count($data)>0): ?>
										<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<a href="tel:<?php echo e($item->phone); ?>"><?php echo e($item->name); ?>: <?php echo e($item->phone); ?></a>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<?php endif; ?>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-6 d-flex m-b30">
					<div class="map">
						<?php echo App\Models\CommonModel::get_setting('setting_map'); ?>

					</div>
				</div>

			</div>
		</div>
	</div>
				
	
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\htc\resources\views/frontend/contact.blade.php ENDPATH**/ ?>