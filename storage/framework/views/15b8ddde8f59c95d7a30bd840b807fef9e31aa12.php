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
<script src="<?php echo e(asset('assets/frontend')); ?>/js/tween-max.js"></script>
	<script>
		const bannerSwiper = new Swiper('.timeline .swiper', {
			loop: false,
			speed: 2000,
			autoplay: {
				delay: 3000,
			},
			grabCursor: true,
			slidesPerView: '4',
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev'
			},
			breakpoints: {
				320: {
					slidesPerView: 1
				},
				575: {
					slidesPerView: 2
				},
				767: {
					slidesPerView: 3
				},
				1920: {
					slidesPerView: 4
				},
			},
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
						<li>Giới thiệu</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="content-block">
		<div class="about-us section-full content-inner motion-effects-wrap">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-10 m-b30">
						<div class="about-img-gallery-style-1">
							<ul class="about-img-gallery-list">
								<li>
									<img class="wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="800ms"
										src="<?php echo e(App\Models\CommonModel::get_setting('website_banner2')); ?>" alt="about-img_1"
										width="551" height="630">
								</li>
								<li>
									<img class="wow fadeInRight" data-wow-delay="500ms"
										data-wow-duration="800ms"
										src="<?php echo e(App\Models\CommonModel::get_setting('website_banner3')); ?>" alt="about-img_2"
										width="551" height="555">
								</li>
								<li>
									<img class="wow fadeInUp" data-wow-delay="700ms" data-wow-duration="800ms"
										src="<?php echo e(App\Models\CommonModel::get_setting('website_banner4')); ?>"
										alt="about-img_3" width="551" height="320">
								</li>
							</ul>
							<ul class="shape-list">
								<li><img class="motion-effects1" src="<?php echo e(asset('assets/frontend')); ?>/images/LOGO-AMBAN.png" alt="element_17">
								</li>
								<li><img class="motion-effects1" src="<?php echo e(asset('assets/frontend')); ?>/images/element_18.png" alt="element_18">
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-6 col-lg-10 m-b30 wow fadeInUp" data-wow-duration="2s"
						data-wow-delay="0.3s">
						<div class="our-story">
							<span><?php echo e(App\Models\CommonModel::get_setting('setting_website_home2')); ?></span>
							<h2 class="title"><?php echo App\Models\CommonModel::get_setting('setting_website_home3'); ?> </span> </h2>
							<p><?php echo e(App\Models\CommonModel::get_setting('setting_website_home4')); ?>

							</p>
							<a href="<?php echo e(route('about')); ?>" class="site-button btnhover20">Xem thêm</a>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="section-full content-inner box-about-list">
			<div class="container">
				<div class="icon-bx-wraper m-b30">
					<div class="icon-thumb">
						<img src="<?php echo e(App\Models\CommonModel::get_setting('website_about1')); ?>" alt="icon">
					</div>
					<div class="icon-content">
						<h4 class="dlab-tilte">Sứ mệnh</h4>
						<?php echo App\Models\CommonModel::get_setting('setting_about2'); ?>

					</div>
				</div>
				<div class="icon-bx-wraper m-b30">
					<div class="icon-thumb">
						<img src="<?php echo e(App\Models\CommonModel::get_setting('website_about3')); ?>" alt="icon">
					</div>
					<div class="icon-content">
						<h4 class="dlab-tilte">Tầm nhìn</h4>
						<?php echo App\Models\CommonModel::get_setting('setting_about4'); ?>

					</div>
				</div>
				<div class="icon-bx-wraper">
					<div class="icon-thumb">
						<img src="<?php echo e(App\Models\CommonModel::get_setting('website_about5')); ?>" alt="icon">
					</div>
					<div class="icon-content">
						<h4 class="dlab-tilte">Tôn chỉ & giá trị của công ty</h4>
						<?php echo App\Models\CommonModel::get_setting('setting_about6'); ?>

					</div>
				</div>
			</div>
		</div>
		<div class="section-full content-inner bg-gray">
					<div class="container">
						<div class="section-head text-center">
							<h2 class="title">Sản phẩm của chúng tôi</h2>
							<?php echo App\Models\CommonModel::get_setting('setting_product'); ?>

						</div>
						<div class="product-grid">
							<?php if(isset($product) && count($product)>0): ?>
									<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
			<div class="section-full content-inner">
					<div class="container-fluid">
						<div class="section-head text-center">
							<h2 class="title">Dấu mốc lịch sử</h2>
							<p>
								<?php echo e(App\Models\CommonModel::get_setting('website_about7')); ?>

							</p>
						</div>
						<div class="timeline">
							<div class="swiper">
								<div class="swiper-wrapper">
									<?php if(isset($timeline) && count($timeline)>0): ?>
									<?php $__currentLoopData = $timeline; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="swiper-slide">
										<div class="timeline-date">
											<span><?php echo e($item->name); ?></span>
										</div>
										<div class="timeline-content">
											<p>
											<?php echo e($item->content); ?>

											</p>
										</div>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\htc\resources\views/frontend/about.blade.php ENDPATH**/ ?>