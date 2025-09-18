<?php $__env->startSection("title"); ?>
<?php if(isset($data) && !empty($data)): ?>
	<?php if(isset($data->seotitle) && $data->seotitle!=''): ?>
	<?php echo e($data->seotitle); ?>

	<?php else: ?>
		<?php echo e($data->name); ?>

	<?php endif; ?>
<?php else: ?>
<?php echo e(App\Models\CommonModel::get_setting('setting_website_title')); ?>

<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("desc"); ?>
<?php if(isset($data) && !empty($data)): ?>
	<?php if(isset($data->seodesc) && $data->seodesc!=''): ?>
	<?php echo e($data->seodesc); ?>

	<?php else: ?>
		<?php echo e($data->name); ?>

	<?php endif; ?>
<?php else: ?>
<?php echo e(App\Models\CommonModel::get_setting('setting_website_desc')); ?>

<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("keyword"); ?>
<?php echo e(App\Models\CommonModel::get_setting('setting_website_keyword')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("facebooktag"); ?>
<meta property="og:url" content="<?php echo e(Request::url()); ?>" /> 
   <meta property="og:type" content="article" />   
   <meta property="og:title" content="<?php

if ($data->seofbtitle != '') {

    echo $data->seofbtitle;

} else {

    echo $data->name;

}

?>" />



<meta property="og:description" content="<?php

if ($data->seofbdesc != '') {

    echo $data->seofbdesc;

} else {

    echo $data->name;

}

?>" />
   <meta property="og:image" content="<?php echo e(asset($data->avatar)); ?>" />
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
		$(document).ready(function () {

			var sync1 = $("#sync1");
			var sync2 = $("#sync2");
			var slidesPerPage = 4; //globaly define number of elements per page
			var syncedSecondary = true;

			sync1.owlCarousel({
				items: 1,
				slideSpeed: 2000,
				nav: true,
				autoplay: false,
				dots: false,
				loop: true,
				responsiveRefreshRate: 200,
				navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
			}).on('changed.owl.carousel', syncPosition);

			sync2.on('initialized.owl.carousel', function () {
				sync2.find(".owl-item").eq(0).addClass("current");
			}).owlCarousel({
				items: slidesPerPage,
				dots: false,
				nav: false,
				margin: 5,
				smartSpeed: 200,
				slideSpeed: 500,
				slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
				responsiveRefreshRate: 100
			}).on('changed.owl.carousel', syncPosition2);

			function syncPosition(el) {
				//if you set loop to false, you have to restore this next line
				//var current = el.item.index;

				//if you disable loop you have to comment this block
				var count = el.item.count - 1;
				var current = Math.round(el.item.index - (el.item.count / 2) - .5);

				if (current < 0) {
					current = count;
				}
				if (current > count) {
					current = 0;
				}

				//end block

				sync2
					.find(".owl-item")
					.removeClass("current")
					.eq(current)
					.addClass("current");
				var onscreen = sync2.find('.owl-item.active').length - 1;
				var start = sync2.find('.owl-item.active').first().index();
				var end = sync2.find('.owl-item.active').last().index();

				if (current > end) {
					sync2.data('owl.carousel').to(current, 100, true);
				}
				if (current < start) {
					sync2.data('owl.carousel').to(current - onscreen, 100, true);
				}
			}

			function syncPosition2(el) {
				if (syncedSecondary) {
					var number = el.item.index;
					sync1.data('owl.carousel').to(number, 100, true);
				}
			}

			sync2.on("click", ".owl-item", function (e) {
				e.preventDefault();
				var number = $(this).index();
				//sync1.data('owl.carousel').to(number, 300, true);

				sync1.data('owl.carousel').to(number, 300, true);

			});
		});

	</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("body"); ?>
no-banner
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<input type="hidden" id="pid" value="<?php echo e($data->id); ?>"/>
<div class="page-content">

	<div class="dlab-bnr-inr overlay-black-middle bg-pt">
		<div class="container">
			<div class="dlab-bnr-inr-entry">
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li><a href="<?php echo e(asset('')); ?>">Trang chủ</a></li>
						<li><a href="<?php echo e(route('product')); ?>">Sản phẩm</a></li>
						<li><?php echo e($data->name); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section-full content-inner product-detail">
		<div class="container woo-entry">
			<div class="row">
				<div class="col-md-5 col-lg-5 col-sm-12">
					<div class="product-gallery on-show-slider lightgallery" id="lightgallery">
						<?php if($data->images!=''): ?>
						<?php $img=explode(',',$data->images);$i=0; ?>
						<div id="sync1" class="owl-carousel owl-theme owl-btn-center-lr m-b5 owl-btn-1 primary">
							<?php $__currentLoopData = $img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $im): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="item">
								<div class="mfp-gallery">
									<div class="dlab-box">
										<div class="dlab-thum-bx">
											<img src="<?php echo e($im); ?>" alt="image">
											<div class="overlay-icon">
												<span data-exthumbimage="<?php echo e($im); ?>"
													data-src="<?php echo e($im); ?>" class="check-km"
													title="<?php echo e($data->name); ?>">
													<i class="fa-regular fa-magnifying-glass"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<div id="sync2" class="owl-carousel owl-theme owl-none">
							<?php $__currentLoopData = $img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="item">
								<div class="dlab-media">
									<img src="<?php echo e($thumb); ?>" alt="image">
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-7 col-lg-7 col-sm-12">
					<div class="cart sticky-top">
						<div class="dlab-post-title">
							<h1 class="post-title"><?php echo e($data->name); ?></h1>
							<p>
								<?php echo e($data->description); ?>

							</p>
							<?php echo $data->specification; ?>

							<div class="buttons">
								<a href="tel:<?php echo e(App\Models\CommonModel::get_setting('setting_phone')); ?>" class="site-button btnhover20">Liên hệ ngay</a>
								<a download href="<?php echo e($data->pdf); ?>" class="site-button-secondry btnhover20">Xem PDF</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="dlab-tabs product-description tabs-site-button">
						<ul class="nav nav-tabs ">
							<li><a data-bs-toggle="tab" href="#tab-pane1" class="active">Ứng dụng sản phẩm</a>
							</li>
							<li><a data-bs-toggle="tab" href="#tab-pane2">Thông tin chi tiết</a></li>
						</ul>
						<div class="tab-content">
							<div id="tab-pane1" class="tab-pane active">
								<?php echo $data->used; ?>

							</div>
							<div id="tab-pane2" class="tab-pane">
								<?php echo $data->content; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
			<?php if(isset($relate) && count($relate)>0): ?>
			<div class="row">
				<div class="col-lg-12">
					<h3 class="m-b20">Sản phẩm tương tự</h3>
					<div class="product-grid">
						<?php $__currentLoopData = $relate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
								<a href="<?php echo e(route('product_detail', $item->slug)); ?>" class="link">Xem chi tiết <i
										class="fa-regular fa-arrow-right"></i></a>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="section-full call-action bg-primary wow fadeIn" data-wow-duration="2s" data-wow-delay="0.9s">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 text-white">
				<h2 class="title"><?php echo e(App\Models\CommonModel::get_setting('setting_website_home29')); ?> </h2>
				<p class="m-b0"><?php echo e(App\Models\CommonModel::get_setting('setting_website_home30')); ?></p>
			</div>
			<div class="col-lg-3 d-flex">
				<a href="#"
					class="site-button white align-self-center outline ms-auto outline-2 btnhover14">Liên hệ
					ngay!</a>
			</div>
		</div>
	</div>
</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\htc\resources\views/frontend/product/detail.blade.php ENDPATH**/ ?>