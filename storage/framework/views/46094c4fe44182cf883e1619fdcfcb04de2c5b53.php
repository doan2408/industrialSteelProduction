<?php $__env->startSection("title"); ?>
<?php if(isset($check) && !empty($check)): ?>
	<?php if(isset($check->seotitle) && $check->seotitle!=''): ?>
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
	<?php if(isset($check->seodesc) && $check->seodesc!=''): ?>
	<?php echo e($check->seodesc); ?>

	<?php else: ?>
		<?php echo e($check->description); ?>

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
   <meta property="og:title" content="
   <?php if(isset($check) && !empty($check)): ?>
	<?php if(isset($check->seofbtitle) && $check->seofbtitle!=''): ?>
	<?php echo e($check->seofbtitle); ?>

	<?php else: ?>
		<?php echo e($check->description); ?>

	<?php endif; ?>
<?php else: ?>
	
<?php echo e(App\Models\CommonModel::get_setting('setting_website_title')); ?>

<?php endif; ?>
   " />



<meta property="og:description" content="
<?php if(isset($check) && !empty($check)): ?>
	<?php if(isset($check->seofbdesc) && $check->seofbdesc!=''): ?>
	<?php echo e($check->seofbdesc); ?>

	<?php else: ?>
		<?php echo e($check->description); ?>

	<?php endif; ?>
<?php else: ?>
	
<?php echo e(App\Models\CommonModel::get_setting('setting_website_desc')); ?>

<?php endif; ?>
"/>
   <meta property="og:image" content="<?php echo e(asset(App\Models\CommonModel::get_setting('website_logo'))); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection("css"); ?>
<script type="application/ld+json">
{
   "@context": "https://schema.org",
   "@type": "NewsArticle",
   "url": "<?php echo e(route('news')); ?>",
   "publisher":{
      "@type":"Organization",
      "name":"<?php echo e(App\Models\CommonModel::get_setting('setting_website_title')); ?>",
      "logo":"<?php echo e(App\Models\CommonModel::get_setting('setting_logo')); ?>"
   },
   "headline": "Tin tức",
   "mainEntityOfPage": "<?php echo e(route('news')); ?>",
   "articleBody": "Tin tức",
   "image":[
      "<?php echo e(App\Models\CommonModel::get_setting('setting_logo')); ?>"
   ],
   "datePublished":"<?php echo e(date('Y-m-d H:i:s',time())); ?>"
}
</script>
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
						<li><?php if(isset($check) && !empty($check)): ?><?php echo e($check->name); ?><?php else: ?> Tin tức <?php endif; ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="blog-category">
						<ul>
							<?php if(isset($category) && count($category)>0): ?>
							<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><a href="<?php echo e(route('news_cate',$item->slug)); ?>" class="<?php if(isset($check) && $check->id == $item->id): ?>active <?php endif; ?>"><?php echo e($item->name); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>
				<?php if(isset($data) && count($data)>0): ?>
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-4 col-md-6">
					<div class="blog-post blog-grid blog-rounded blog-effect1">
						<div class="dlab-post-media dlab-img-effect rotate">
							<a href="<?php echo e(route('news_detail',$item->slug)); ?>">
								<img src="<?php echo e($item->avatar); ?>" alt="<?php echo e($item->name); ?>">
							</a>
						</div>
						<div class="dlab-info p-a20 border-1">
							<div class="dlab-post-meta">
								<ul>
									<li class="post-date"> <?php echo e(date('d/m/Y',$item->timepost)); ?> </li>
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
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="pagination-bx clearfix text-center">
						<?php if($data->links()!=''): ?>
						<?php echo e($data->links('frontend.pani')); ?>	
							
						<?php endif; ?>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\htc\resources\views/frontend/news/view.blade.php ENDPATH**/ ?>