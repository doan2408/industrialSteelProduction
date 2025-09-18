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

<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<main>
	<div class="section sec-1">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<form action="#" id="frmactive">
						<span class="alert success hide">
							Chúc mừng! Bạn đã đặt hàng thành công.
						</span>
						
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php echo $__env->make('frontend.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\baohanh\resources\views/frontend/success.blade.php ENDPATH**/ ?>