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
	jQuery(document).ready(function () {
		'use strict';
		dz_rev_slider_5();
	});
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="page-content bg-white">
	<div class="main-slider style-two default-banner" id="home">
		<div class="tp-banner-container">
			<div class="tp-banner">
				<div id="rev_slider_1175_1_wrapper" class="rev_slider_wrapper fullscreen-container"
					data-alias="duotone192" data-source="gallery"
					style="background-color:transparent;padding:0px;">
					<!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
					<div id="rev_slider_1175_1" class="rev_slider fullscreenbanner" style="display:none;"
						data-version="5.3.0.2">
						<ul>
							<!-- SLIDE  -->
							<li data-index="rs-3239" data-transition="fade" data-slotamount="default"
								data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
								data-easeout="default" data-masterspeed="default"
								data-thumb="<?php echo e(App\Models\CommonModel::get_setting('website_banner1')); ?>" data-rotate="0" data-fstransition="fade"
								data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off"
								data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4=""
								data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
								data-param10="" data-description="">
								<!-- MAIN IMAGE -->
								<img src="<?php echo e(App\Models\CommonModel::get_setting('website_banner1')); ?>" alt="image" data-lazyload="<?php echo e(App\Models\CommonModel::get_setting('website_banner1')); ?>"
									data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
									data-bgparallax="3" class="rev-slidebg" data-no-retina="">
								<!-- LAYERS -->
								<div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer"
									data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']"
									data-y="['middle','middle','middle','middle']"
									data-voffset="['0','0','0','0']" data-width="full" data-height="full"
									data-whitespace="nowrap" data-type="shape" data-basealign="slide"
									data-responsive_offset="off" data-responsive="off"
									data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
									data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 2;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 0);border-width:0px; background-image:url(<?php echo e(asset('assets/frontend')); ?>/images/overlay/rrdiagonal-line.png)">
								</div>
								<!-- BACKGROUND VIDEO LAYER -->
								<div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute"
									data-videowidth="100%" data-videoheight="100%"
									data-videomp4="<?php echo e(App\Models\CommonModel::get_setting('website_video')); ?>" data-videopreload="auto"
									data-videoloop="none" data-aspectratio="16:9" data-autoplay="true"
									data-autoplayonlyfirsttime="false" data-forcecover="1"
									data-nextslideatend="true"></div>
								<!-- LAYER NR. 1 -->
								<div class="tp-caption   rs-parallaxlevel-4" id="slide-3239-layer-1"
									data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']"
									data-y="['middle','middle','middle','middle']"
									data-voffset="['0','0','0','0']" data-fontsize="['60','60','40','20']"
									data-lineheight="['75','70','50','30']"
									data-width="['720','640','480','300']" data-height="none"
									data-whitespace="normal" data-type="text" data-responsive_offset="off"
									data-responsive="off"
									data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
									data-textalign="['center','center','center','center']"
									data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
									style="z-index: 5; min-width: 720px; max-width: 720px; white-space: normal; font-size: 60px; line-height: 70px;  color: rgba(255, 255, 255, 1.00);font-family:Poppins;border-width:0px; font-weight:600;">
									<?php echo App\Models\CommonModel::get_setting('setting_website_home1'); ?>

								</div>
							</li>
							<!-- SLIDE  -->
						</ul>
						<div class="tp-bannertimer"
							style="height: 8px; background-color: rgba(255, 255, 255, 0.25);"></div>
					</div>
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
		<div class="section-full content-inner-2 bg-primary wow fadeIn" data-wow-duration="2s"
					data-wow-delay="0.2s" style="background-image:url(<?php echo e(asset('assets/frontend')); ?>/images/background/map-bg.png);">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center service-info">
						<h2 class="title text-white"><?php echo e(App\Models\CommonModel::get_setting('setting_website_home5')); ?>

						</h2>
						<p><?php echo e(App\Models\CommonModel::get_setting('setting_website_home6')); ?>

						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="section-full content-inner">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title"><?php echo e(App\Models\CommonModel::get_setting('setting_website_home7')); ?></h2>
					<p>
						<?php echo e(App\Models\CommonModel::get_setting('setting_website_home8')); ?>

					</p>
				</div>
				<div class="product-grid">
					<?php if(isset($product) && count($product)>0): ?>
					<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="dlab-box service-box-2">
						<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect rotate">
							<a href="#">
								<img src="<?php echo e($item->avatar); ?>" alt="<?php echo e($item->name); ?>">
							</a>
						</div>
						<div class="dlab-info">
							<h4 class="title">
								<a href="#"><?php echo e($item->name); ?></a>
							</h4>
							<p><?php echo e($item->description); ?>

							</p>
							<a href="#" class="link">Xem chi tiết <i class="fa-regular fa-arrow-right"></i></a>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="section-full content-inner bg-gray">
			<div class="container-fluid">
				<div class="section-head text-center">
					<h2 class="title"><?php echo e(App\Models\CommonModel::get_setting('setting_website_home9')); ?></h2>
					<p>
						<?php echo e(App\Models\CommonModel::get_setting('setting_website_home10')); ?>

					</p>
				</div>
				<div class="overflow-auto">
					<div class="services-grid">
						<?php if(isset($services) && count($services)>0): ?>
					<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="<?php echo e(route('services',$item->slug)); ?>" class="service-item">
							<div class="service-icon">
								<img src="<?php echo e($item->avatar); ?>" alt="<?php echo e($item->name); ?>">
							</div>
							<span class="service-title">
								<?php echo e($item->name); ?>

							</span>
						</a>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="section-full call-action style1 bg-primary wow fadeIn" data-wow-duration="2s"
					data-wow-delay="0.2s">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 text-white">
						<h2 class="title"><?php echo e(App\Models\CommonModel::get_setting('setting_website_home11')); ?></h2>
					</div>
					<div class="col-lg-3 d-flex">
						<a href="#" class="site-button black align-self-center ms-auto btnhover20">Liên hệ</a>
					</div>
				</div>
			</div>
		</div>
		<div class="section-full section-project content-inner bg-gray wow fadeInUp" data-wow-duration="2s"
					data-wow-delay="0.4s">
			<div class="container">
				<div class="section-head text-black text-center">
					<h2 class="title"><?php echo e(App\Models\CommonModel::get_setting('setting_website_home12')); ?></h2>
					<p><?php echo e(App\Models\CommonModel::get_setting('setting_website_home13')); ?></p>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div
							class="img-carousel-dots-nav owl-theme owl-dots-none owl-carousel owl-btn-center-lr owl-btn-3">
							<?php if(isset($project) && count($project)>0): ?>
							<?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="item">
								<div class="dlab-box project-bx">
									<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect zoom">
										<a href="<?php echo e(route('detail', $item->slug)); ?>"><img src="<?php echo e($item->avatar); ?>"
												alt="<?php echo e($item->name); ?>"></a>
									</div>
									<div class="dlab-info">
										<h5 class="dlab-title">
											<a href="<?php echo e(route('detail', $item->slug)); ?>"><?php echo e($item->name); ?></a>
										</h5>
									</div>
								</div>
							</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-full section-ads content-inner wow fadeIn" data-wow-duration="2s"
					data-wow-delay="0.3s">
			<div class="container">
				<div class="grid-content">
					<div class="large-ads">
						<div class="overlay"></div>
						<img src="<?php echo e(App\Models\CommonModel::get_setting('website_banner5')); ?>" alt="image">
						<div class="ads-info">
							<p><?php echo e(App\Models\CommonModel::get_setting('setting_website_home14')); ?></p>
							<h3><?php echo e(App\Models\CommonModel::get_setting('setting_website_home15')); ?>

							</h3>
							<a href="<?php echo e(App\Models\CommonModel::get_setting('setting_website_home16')); ?>" class="site-button btnhover20">Xem chi tiết</a>
						</div>
					</div>
					<div class="small-ads">
						<a href="<?php echo e(App\Models\CommonModel::get_setting('setting_website_home19')); ?>">
							<div class="overlay"></div>
							<img src="<?php echo e(App\Models\CommonModel::get_setting('website_banner6')); ?>" alt="image">
							<div class="ads-info">
								<p><?php echo e(App\Models\CommonModel::get_setting('setting_website_home17')); ?></p>
								<h3><?php echo e(App\Models\CommonModel::get_setting('setting_website_home18')); ?></h3>
							</div>
						</a>
						<a href="<?php echo e(App\Models\CommonModel::get_setting('setting_website_home22')); ?>">
							<div class="overlay"></div>
							<img src="<?php echo e(App\Models\CommonModel::get_setting('website_banner7')); ?>" alt="image">
							<div class="ads-info">
								<p><?php echo e(App\Models\CommonModel::get_setting('setting_website_home20')); ?></p>
								<h3><?php echo e(App\Models\CommonModel::get_setting('setting_website_home21')); ?></h3>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="section-full bg-gray dlab-we-find content-inner bg-img-fix wow fadeIn"
					data-wow-duration="2s" data-wow-delay="0.3s">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title"><?php echo e(App\Models\CommonModel::get_setting('setting_website_home23')); ?></h2>
					<p>
						<?php echo e(App\Models\CommonModel::get_setting('setting_website_home24')); ?>

					</p>
				</div>
				<div class="section-content">
					<div
						class="client-logo-carousel mfp-gallery gallery owl-btn-center-lr owl-carousel owl-btn-3">
						<?php if(isset($brand) && count($brand)>0): ?>
						<?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo">
									<img src="<?php echo e($item->avatar); ?>" alt="<?php echo e($item->name); ?>">
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
						
					</div>
				</div>
			</div>
		</div>
		<div class="section-full content-inner wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
			<div class="container">
				<div class="section-head text-black text-center">
					<h2 class="title"><?php echo e(App\Models\CommonModel::get_setting('setting_website_home25')); ?></h2>
					<p><?php echo e(App\Models\CommonModel::get_setting('setting_website_home26')); ?></p>
				</div>
				<div class="blog-carousel owl-carousel owl-btn-3 owl-btn-center-lr">
					<?php if(isset($news) && count($news)>0): ?>
						<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="item">
						<div class="blog-post blog-grid blog-rounded blog-effect1">
							<div class="dlab-post-media dlab-img-effect rotate">
								<a href="<?php echo e(route('news_detail',$item->slug)); ?>">
									<img src="<?php echo e($item->avatar); ?>" alt="<?php echo e($item->name); ?>">
								</a>
							</div>
							<div class="dlab-info p-a20 border-1">
								<div class="dlab-post-meta">
									<ul>
										<li class="post-date"> <?php echo e(date('d/m/Y',$item->timepost)); ?></li>
										<li class="post-author"> bởi <?php echo e($item->uname); ?> </li>
									</ul>
								</div>
								<div class="dlab-post-title">
									<h4 class="post-title"><a href="<?php echo e(route('news_detail',$item->slug)); ?>"><?php echo e($item->name); ?></a>
									</h4>
								</div>
								<div class="dlab-post-text">
									<p><?php echo e($item->description); ?></p>
								</div>
								<div class="dlab-post-readmore">
									<a href="<?php echo e(route('news_detail',$item->slug)); ?>" title="Xem chi tiết" rel="bookmark"
										class="site-button btnhover14">Xem chi tiết</a>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="section-full bg-gray dlab-we-find content-inner bg-img-fix wow fadeIn"
					data-wow-duration="2s" data-wow-delay="0.3s">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title"><?php echo e(App\Models\CommonModel::get_setting('setting_website_home27')); ?></h2>
					<p>
						<?php echo e(App\Models\CommonModel::get_setting('setting_website_home28')); ?>

					</p>
				</div>
				<div class="section-content">
					<div
						class="client-logo-carousel mfp-gallery gallery owl-btn-center-lr owl-carousel owl-btn-3">
						<?php if(isset($customer) && count($customer)>0): ?>
						<?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="item">
							<div class="ow-client-logo">
								<div class="client-logo">
									<img src="<?php echo e($item->avatar); ?>" alt="<?php echo e($item->name); ?>">
								</div>
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
<?php echo $__env->make('frontend.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\htc\resources\views/frontend/index.blade.php ENDPATH**/ ?>