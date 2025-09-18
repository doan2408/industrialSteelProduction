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
<style>
	@media  only screen and (max-width: 991.98px) {

		.product-section .product-grid-4,
		.product-section .product-grid-8 {
			width: max-content;
			display: flex;
		}

		.product-section .product-grid-4 .product-box,
		.product-section .product-grid-8 .product-box {
			width: 140px;
			padding: 5px;
		}
	}
</style>
<?php $__env->startSection("js"); ?>
	<script src="<?php echo e(asset('assets/frontend')); ?>/js/jquery.min.js"></script>
	<script src="<?php echo e(asset('assets/frontend')); ?>/js/jquery-ui.min.js"></script>
	<script src="<?php echo e(asset('assets/frontend')); ?>/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo e(asset('assets/frontend')); ?>/js/swiper-bundle.min.js"></script>
	<script src="<?php echo e(asset('assets/frontend')); ?>/js/select2.min.js"></script>
	<script src="<?php echo e(asset('assets/frontend')); ?>/js/main.js"></script>
	<script>
		const bannerSwiper = new Swiper('.banner .swiper', {
			loop: true,
			speed: 2000,
			autoplay: {
				delay: 3000,
			},
			grabCursor: true,
			slidesPerView: '1',

			pagination: {
				el: '.swiper-pagination',
			},

			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev'
			}
		});
		const brandSwiper = new Swiper('.brand-slide .swiper', {
			loop: true,
			speed: 2000,
			autoplay: {
				delay: 1000,
			},
			grabCursor: true,
			slidesPerView: '1',
			spaceBetween: 20,
			breakpoints: {
				320: {
					slidesPerView: 3
				},
				480: {
					slidesPerView: 3
				},
				767: {
					slidesPerView: 3
				},
				1199: {
					slidesPerView: 4
				},
				1440: {
					slidesPerView: 4
				},
				1920: {
					slidesPerView: 4
				},
			},

		});
		const productSwiper = new Swiper('.product-section .swiper', {
			loop: true,
			speed: 2000,
			spaceBetween: 20,
			autoplay: {
				delay: 3000,
			},
			grabCursor: true,
			slidesPerView: '6',

			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev'
			},
			breakpoints: {
				320: {
					slidesPerView: 2,
					spaceBetween: 10
				},
				480: {
					slidesPerView: 2,
					spaceBetween: 10
				},
				767: {
					slidesPerView: 4,
					spaceBetween: 10
				},
				1199: {
					slidesPerView: 5,
					spaceBetween: 10
				},
				1440: {
					slidesPerView: 6
				},
				1920: {
					slidesPerView: 6
				},
			},
		});
	</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
	<main>
		<div class="banner">
			<div class="swiper">
				<?php if(isset($slide) && count($slide) > 0): ?>
					<?php $i = 0; ?>
					<div class="swiper-wrapper">
						<?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="swiper-slide">
								<!-- <picture>
																											<source srcset="<?php if(isset($slide1[$i])): ?><?php echo e($slide1[$i]->avatar); ?><?php endif; ?>" width="600" height="800"
																												media="(max-width:767.98px)" />

																										</picture> -->
								<img src="<?php echo e($item->avatar); ?>" width="1920" height="600" alt="image">
							</div>
							<?php $i++; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>

					<div class="swiper-pagination"></div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				<?php endif; ?>
			</div>
		</div>

		<div class="section">
			<div class="container">
				<?php echo App\Models\CommonModel::get_setting('setting_website_brand'); ?>

				<div class="brand-slide">
					<div class="swiper">
						<?php if(isset($brand) && count($brand) > 0): ?>
							<div class="swiper-wrapper">
								<?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="swiper-slide">
										<a href="<?php echo e(route('search', array('null','null', $item->id))); ?>">
											<img src="<?php echo e($item->avatar); ?>" alt="<?php echo e($item->name); ?>">
										</a>
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>


		<?php if(isset($brand) && count($brand) > 0): ?>
			<?php $i = 0; ?>
			<?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($item->type_banner!=0): ?>
					<?php if($item->type_banner==1): ?>
						<div class="section ads-section style-3 <?php if($i%2!=0): ?> gray-bg <?php endif; ?>">
							<div class="container">
								<div class="grid-content">
									<div class="ads-info">
										<?php echo $item->text_video; ?>

										<a href="<?php echo e($item->url_video); ?>" class="button">Xem chi tiết</a>
									</div>
									<div class="ads-thumb">
										<video autoplay="autoplay" muted="muted" loop="loop" controls>
											<source src="<?php echo e($item->video); ?>" type="video/mp4" />
										</video>
									</div>
								</div>
							</div>
						</div>
					<?php elseif($item->type_banner==2): ?>
						<div class="section ads-section style-2 <?php if($i%2!=0): ?> gray-bg <?php endif; ?>">
							<div class="container">
								<div class="grid-content">
									<div class="large-ads">
										<video autoplay="autoplay" muted="muted" loop="loop">
											<source src="<?php echo e($item->video); ?>" type="video/mp4" />
										</video>
										<div class="ads-info">
											<?php echo $item->text_video; ?>

											<a href="<?php echo e($item->url_video); ?>" class="button">Xem chi tiết</a>
										</div>
									</div>
									<div class="small-ads">
										<a href="<?php echo e($item->url_banner1); ?>">
											<img src="<?php echo e($item->banner1); ?>"
												alt="image">
											<div class="ads-info">
												<?php echo $item->text_banner1; ?>

											</div>
										</a>
										<a href="<?php echo e($item->url_banner2); ?>">
											<img src="<?php echo e($item->banner2); ?>"
												alt="image">
											<div class="ads-info">
												<?php echo $item->text_banner2; ?>

											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php else: ?>
						<div class="section ads-section <?php if($i%2!=0): ?> gray-bg <?php endif; ?>">
							<div class="container">
								<div class="grid-content">
									<div class="large-ads">
										<video autoplay="autoplay" muted="muted" loop="loop">
											<source src="<?php echo e($item->video); ?>" type="video/mp4" />
										</video>
										<div class="ads-info">
											<?php echo $item->text_video; ?>

											<a href="<?php echo e($item->url_video); ?>" class="button">Xem chi tiết</a>
										</div>
									</div>
									<div class="small-ads">
										<a href="<?php echo e($item->url_banner1); ?>">
											<img src="<?php echo e($item->banner1); ?>"
												alt="image">
											<div class="ads-info">
												<?php echo $item->text_banner1; ?>

											</div>
										</a>
										<a href="<?php echo e($item->url_banner2); ?>">
											<img src="<?php echo e($item->banner2); ?>"
												alt="image">
											<div class="ads-info">
												<?php echo $item->text_banner2; ?>

											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>					
				<?php endif; ?>
				<?php if($item->type == 2): ?>
					<?php if(isset($product[$i]) && count($product[$i]) > 0): ?>
						<div class="section product-section gray-bg">
							<div class="container">
								<div class="row align-items-center">
									<div class="col-lg-4 mb-mg-20 mb-txt-center">
										<h2 class="title"><?php echo e($item->name); ?></h2>
										<p><?php echo e($item->description); ?></p>
										<a href="<?php echo e(route('search', array('null', 'null', $item->id))); ?>" class="button">Xem tất cả</a>
									</div>

									<div class="col-lg-8">
										<div class="product-grid-2">
											<?php for ($j = 0; $j < 4; $j++) {
										if (isset($product[$i][$j])) {
																																																																																																												?>
											<div class="product-box">
												<div class="product-thumb">
													<a href="<?php echo e(route('product_detail', $product[$i][$j]->slug)); ?>"><img
															src="<?php echo e($product[$i][$j]->avatar); ?>" alt="<?php echo e($product[$i][$j]->name); ?>"></a>
													<?php if($product[$i][$j]->quick_tag!=0): ?>
													<div class="product-tag">
														<?php if($product[$i][$j]->quick_tag==1): ?> Preorder <?php else: ?> Mới <?php endif; ?>
													</div>
													<?php endif; ?>
												</div>
												<div class="product-content">
													<h3 class="product-title">
														<a
															href="<?php echo e(route('product_detail', $product[$i][$j]->slug)); ?>"><?php echo e($product[$i][$j]->name); ?></a>
													</h3>
													<span class="product-price">
														<?php if($product[$i][$j]->price != 0): ?>
															<?php if($product[$i][$j]->pprice!=0): ?>
															<?php echo e(number_format($product[$i][$j]->pprice)); ?>đ
															<span><del><?php echo e(number_format($product[$i][$j]->price)); ?>đ</del><span class="sale">-<?php echo e(100-round($product[$i][$j]->pprice/$product[$i][$j]->price*100)); ?>%</span></span>	
															<?php else: ?>
															<?php echo e(number_format($product[$i][$j]->price)); ?>đ
															<?php endif; ?>
														<?php else: ?> 
															Liên hệ 
														<?php endif; ?>
														
													</span>
												</div>
											</div>
											<?php }
									} ?>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="overflow-auto">
											<div class="product-grid-4">
												<?php for ($j = 4; $j < 8; $j++) {
										if (isset($product[$i][$j])) {
																																																																																																												?>
												<div class="product-box">
													<div class="product-thumb">
														<a href="<?php echo e(route('product_detail', $product[$i][$j]->slug)); ?>"><img
																src="<?php echo e($product[$i][$j]->avatar); ?>" alt="<?php echo e($product[$i][$j]->name); ?>"></a>
														<?php if($product[$i][$j]->quick_tag!=0): ?>
														<div class="product-tag">
															<?php if($product[$i][$j]->quick_tag==1): ?> Preorder <?php else: ?> Mới <?php endif; ?>
														</div>
														<?php endif; ?>
													</div>
													<div class="product-content">
														<h3 class="product-title">
															<a
																href="<?php echo e(route('product_detail', $product[$i][$j]->slug)); ?>"><?php echo e($product[$i][$j]->name); ?></a>
														</h3>
														<span
															class="product-price"><?php if($product[$i][$j]->price != 0): ?><?php echo e(number_format($product[$i][$j]->price)); ?>đ
															<?php else: ?> Liên hệ <?php endif; ?></span>
													</div>
												</div>
												<?php }
									} ?>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					<?php endif; ?>
					
				<?php elseif($item->type == 1): ?>

					<?php if(isset($product[$i]) && count($product[$i]) > 0): ?>
						<div class="section product-section">
							<div class="container">
								<div class="text-center">
									<h2 class="title"><?php echo e($item->name); ?></h2>
									<p><?php echo e($item->description); ?></p>
								</div>
								<div class="overflow-auto">
									<div class="product-grid-8">

										<?php $__currentLoopData = $product[$i]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="product-box">
												<div class="product-thumb">
													<a href="<?php echo e(route('product_detail', $item1->slug)); ?>"><img src="<?php echo e($item1->avatar); ?>"
															alt="<?php echo e($item1->name); ?>"></a>
													<?php if($item1->quick_tag!=0): ?>
													<div class="product-tag">
														<?php if($item1->quick_tag==1): ?> Preorder <?php else: ?> Mới <?php endif; ?>
													</div>
													<?php endif; ?>
												</div>
												<div class="product-content">
													<h3 class="product-title">
														<a href="<?php echo e(route('product_detail', $item1->slug)); ?>"><?php echo e($item1->name); ?></a>
													</h3>
													<span class="product-price">
														<?php if($item1->price != 0): ?>
															<?php if($item1->pprice!=0): ?>
															<?php echo e(number_format($item1->pprice)); ?>đ
															<span><del><?php echo e(number_format($item1->price)); ?>đ</del><span class="sale">-<?php echo e(100-round($item1->pprice/$item1->price*100)); ?>%</span></span>	
															<?php else: ?>
															<?php echo e(number_format($item1->price)); ?>đ
															<?php endif; ?>
														<?php else: ?> 
															Liên hệ 
														<?php endif; ?>
													</span>
												</div>
											</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


									</div>
								</div>
								<div class="text-center mt-3">
									<a href="<?php echo e(route('search', array('null', 'null', $item->id))); ?>" class="button">Xem tất cả</a>
								</div>
							</div>
						</div>
					<?php endif; ?>
					
				<?php elseif($item->type == 0): ?>

					<?php if(isset($product[$i]) && count($product[$i]) > 0): ?>
						<div class="section product-section">
							<div class="container">
								<div class="text-center">
									<h2 class="title"><?php echo e($item->name); ?></h2>
									<p><?php echo e($item->description); ?></p>
								</div>
								<div class="swiper">
									<div class="swiper-wrapper">

										<?php $__currentLoopData = $product[$i]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="swiper-slide">

												<div class="product-box">
													<div class="product-thumb">
														<a href="<?php echo e(route('product_detail', $item1->slug)); ?>"><img src="<?php echo e($item1->avatar); ?>"
																alt="<?php echo e($item1->name); ?>"></a>
														<?php if($item1->quick_tag!=0): ?>
													<div class="product-tag">
														<?php if($item1->quick_tag==1): ?> Preorder <?php else: ?> Mới <?php endif; ?>
													</div>
													<?php endif; ?>
													</div>
													<div class="product-content">
														<h3 class="product-title">
															<a href="<?php echo e(route('product_detail', $item1->slug)); ?>"><?php echo e($item1->name); ?></a>
														</h3>
														<span class="product-price">
														<?php if($item1->price != 0): ?>
															<?php if($item1->pprice!=0): ?>
															<?php echo e(number_format($item1->pprice)); ?>đ
															<span><del><?php echo e(number_format($item1->price)); ?>đ</del><span class="sale">-<?php echo e(100-round($item1->pprice/$item1->price*100)); ?>%</span></span>	
															<?php else: ?>
															<?php echo e(number_format($item1->price)); ?>đ
															<?php endif; ?>
														<?php else: ?> 
															Liên hệ 
														<?php endif; ?>
														</span>
													</div>
												</div>
											</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</div>


									<div class="swiper-button-prev"></div>
									<div class="swiper-button-next"></div>
								</div>
								<div class="text-center mt-3">
									<a href="<?php echo e(route('search', array('null', 'null', $item->id))); ?>" class="button">Xem tất cả</a>
								</div>
							</div>
						</div>
					<?php endif; ?>
					
				<?php elseif($item->type == 3): ?>
					<?php if(isset($product[$i]) && count($product[$i]) > 0): ?>
						<div class="section product-section gray-bg product-border">
							<div class="container">
								<div class="product-section__banner">
									<div class="product-banner__content mb-mg-20 mb-txt-center">
										<h2 class="title"><?php echo e($item->name); ?></h2>
										<p><?php echo e($item->description); ?></p>
										<a href="<?php echo e(route('search', array('null', 'null', $item->id))); ?>" class="button">Xem tất cả</a>
									</div>
									<div class="product-banner__image">
										<img src="<?php echo e($item->banner); ?>" alt="<?php echo e($item->name); ?>">
									</div>
								</div>
								<div class="overflow-auto">
									<div class="product-grid-4">

										<?php $__currentLoopData = $product[$i]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="product-box">
												<div class="product-thumb">
													<a href="<?php echo e(route('product_detail', $item1->slug)); ?>"><img src="<?php echo e($item1->avatar); ?>"
															alt="<?php echo e($item1->name); ?>"></a>
														<?php if($item1->quick_tag!=0): ?>
													<div class="product-tag">
														<?php if($item1->quick_tag==1): ?> Preorder <?php else: ?> Mới <?php endif; ?>
													</div>
													<?php endif; ?>
												</div>
												<div class="product-content">
													<h3 class="product-title">
														<a href="<?php echo e(route('product_detail', $item1->slug)); ?>"><?php echo e($item1->name); ?></a>
													</h3>
													<span class="product-price">
														<?php if($item1->price != 0): ?>
															<?php if($item1->pprice!=0): ?>
															<?php echo e(number_format($item1->pprice)); ?>đ
															<span><del><?php echo e(number_format($item1->price)); ?>đ</del><span class="sale">-<?php echo e(100-round($item1->pprice/$item1->price*100)); ?>%</span></span>	
															<?php else: ?>
															<?php echo e(number_format($item1->price)); ?>đ
															<?php endif; ?>
														<?php else: ?> 
															Liên hệ 
														<?php endif; ?>
													</span>
												</div>
											</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>
				<?php $i++; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
		<div class="section sec-1">
			<div class="container">
				<?php echo App\Models\CommonModel::get_setting('setting_website_about'); ?>


				<div class="sec1-intro__grid">
					<div class="services">
						<div class="box">
							<h3 class="box-title">Kích hoạt bảo hành</h3>
							<p>Dịch vụ kích hoạt bảo hành</p>
							<a href="<?php echo e(route('guarantee')); ?>" class="button">Tìm hiểu thêm</a>
						</div>
						<div class="box">
							<h3 class="box-title">Tra cứu bảo hành</h3>
							<p>Dịch vụ tra cứu bảo hành</p>
							<a href="<?php echo e(route('history')); ?>" class="button">Tìm hiểu thêm</a>
						</div>
						<div class="box">
							<h3 class="box-title">Gia hạn bảo hành</h3>
							<p>Dịch vụ gia hạn bảo hành</p>
							<a href="<?php echo e(route('extend')); ?>" class="button">Tìm hiểu thêm</a>
						</div>
					</div>
					<div class="product-brands">
						<?php if(isset($brand) && count($brand) > 0): ?>
							<?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<a href="<?php echo e(route('search', array('null', 'null', $item->id))); ?>">
									<img src="<?php echo e($item->avatar); ?>" alt="<?php echo e($item->name); ?>">
								</a>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<?php echo $__env->make('frontend.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\baohanh\resources\views/frontend/index.blade.php ENDPATH**/ ?>