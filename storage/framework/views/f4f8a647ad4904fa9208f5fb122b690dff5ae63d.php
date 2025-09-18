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

<?php $__env->startSection("facebooktag"); ?>
<meta property="og:url" content="<?php echo e(Request::url()); ?>" /> 
   <meta property="og:type" content="article" />   
   <meta property="og:title" content="
   <?php if(isset($data) && !empty($data)): ?>
	<?php if(isset($data->seofbtitle) && $data->seofbtitle!=''): ?>
	<?php echo e($data->seofbtitle); ?>

	<?php else: ?>
		<?php echo e($data->name); ?>

	<?php endif; ?>
<?php else: ?>
<?php echo e(App\Models\CommonModel::get_setting('setting_website_title')); ?>

<?php endif; ?>
   " />
<meta property="og:description" content="
<?php if(isset($data) && !empty($data)): ?>
	<?php if(isset($data->seofbdesc) && $data->seofbdesc!=''): ?>
	<?php echo e($data->seofbdesc); ?>

	<?php else: ?>
		<?php echo e($data->name); ?>

	<?php endif; ?>
<?php else: ?>
<?php echo e(App\Models\CommonModel::get_setting('setting_website_desc')); ?>

<?php endif; ?>
" />
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
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > $('.dlab-post-text').offset().top && $('.dlab-post-tags').offset().top > $(window).scrollTop()) {
                $('.fixed-toc').addClass('active')
            } else {
                $('.fixed-toc').removeClass('active')
            }
        })
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("body"); ?>
no-banner
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<?php 
$check=0;
$contentWithIds='';
if($data->content){
	$html = $data->content;
	$dom = new \DOMDocument();
	libxml_use_internal_errors(true); // Bỏ qua các lỗi cú pháp HTML không hợp lệ
	$dom->loadHTML(mb_convert_encoding($html,'HTML-ENTITIES', 'UTF-8'));
	libxml_clear_errors();

	$xpath = new \DOMXPath($dom);
	$nodes = $xpath->query('//h2 | //h3 | //h4');


	$idCounter = 1;
	$subIdCounter = 1;
	$subSubIdCounter = 1;
	$toc = '<ul class="widget-categories__list widget-toc widget-categories__list--root">';

	foreach ($nodes as $node) {
		// Thêm ID cho các thẻ
		$tagName = $node->nodeName;
		if ($tagName === 'h2') {
			$id = 'heading-' . $idCounter;
			$toc .= '<li class="widget-categories__item"><a class="widget-categories__link li_a" href="#' . $id . '" data-id="'.$id.'">' .htmlspecialchars($node->textContent, ENT_QUOTES, 'UTF-8') . '</a></li>';
			$subIdCounter = 1; // Reset subheading counter for each new h2
			$subSubIdCounter = 1; // Reset sub-subheading counter for each new h2
			$idCounter++;
			$check=1;
		} elseif ($tagName === 'h3') {
			$id = 'heading-' . ($idCounter - 1) . '-' . $subIdCounter;
			$toc .= '<ul class="widget-categories__list2"><li><a href="#' . $id . '" class="li_a" data-id="'.$id.'">' . htmlspecialchars($node->textContent, ENT_QUOTES, 'UTF-8') . '</a></li></ul>';
			$subSubIdCounter = 1; // Reset sub-subheading counter for each new h3
			$subIdCounter++;
			$check=1;
		} else { // h4
			$id = 'heading-' . ($idCounter - 1) . '-' . ($subIdCounter - 1) . '-' . $subSubIdCounter;
			$toc .= '<ul><ul><li><a href="#' . $id . '" class="li_a" data-id="'.$id.'">' . htmlspecialchars($node->textContent, ENT_QUOTES, 'UTF-8') . '</a></li></ul></ul>';
			$subSubIdCounter++;
			$check=1;
		}
		$node->setAttribute('id', $id);
		$node->setAttribute('class', 'post__body-item');
	}

	$toc .= '</ul>';
	$contentWithIds = $dom->saveHTML($dom->getElementsByTagName('body')->item(0));
}
?>
<div class="page-content">

	<div class="dlab-bnr-inr overlay-black-middle bg-pt">
		<div class="container">
			<div class="dlab-bnr-inr-entry">
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li><a href="<?php echo e(asset('')); ?>">Trang chủ</a></li>
						<li><?php echo e($data->name); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="content-area">
		<div class="container">
			<div class="dlab-post-title mb-4">
				<div class="dlab-post-title">
					<h1 class="post-title mt-0"><?php echo e($data->name); ?></h1>
				</div>
				<div class="dlab-post-meta">
					<ul>
						<li class="post-date"> <?php echo e(date('d/m/Y',strtotime($data->created_at))); ?> </li>
					</ul>
				</div>
			</div>
			<div class="blog-single">
				<?php if($check==1): ?>
				<div class="toc">
					<h3>
						Mục lục
						<span class="toggle-toc">
							<span class="hide">
								[Ẩn]
							</span>
							<span class="show">
								[Hiện]
							</span>
						</span>
					</h3>
					<?php echo $toc; ?>

				</div>
				<div class="dlab-post-text">
					<div class="fixed-toc">
						<div class="toc fixed">
							<h3>
								Mục lục
								<span class="toggle-toc">
									<span class="hide">
										[Ẩn]
									</span>
									<span class="show">
										[Hiện]
									</span>
								</span>
							</h3>
							<?php echo $toc; ?>

						</div>
						<span class="open-toc">
							<span></span>
						</span>
					</div>
					<p><?php echo e($data->description); ?>

					</p>
					<?php echo $contentWithIds; ?>	
				</div>
				<?php else: ?>
				<div class="dlab-post-text">
					
					<?php echo $data->content; ?>	
				</div>	
				<?php endif; ?>				
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\htc\resources\views/frontend/services.blade.php ENDPATH**/ ?>