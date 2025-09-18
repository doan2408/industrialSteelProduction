<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description" content="<?php echo $__env->yieldContent('desc'); ?>">
	<meta name="keywords" content="<?php echo $__env->yieldContent('keyword'); ?>"/>
    <title><?php echo $__env->yieldContent('title'); ?></title>
	<?php echo $__env->yieldContent('css'); ?>
	<link href="<?php echo e(asset('assets/admin')); ?>/assets/css/jquery.tagsinput.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('assets/admin')); ?>/assets/css/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('assets/admin')); ?>/assets/css/jquery.loadingModal.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(asset('assets/admin')); ?>/assets/css/toastr.min.css" rel="stylesheet" type="text/css" />
	<style>
    .image_insert_caption {
		margin-bottom:5px;
	}
	.toast{
		z-index: 9999;
	}
    </style>
</head>

<body>
	<div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
	<div class="page-wrapper" id="pageWrapper">
		<?php echo $__env->make('admin.layout.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>		
		<div class="page-body-wrapper horizontal-menu">
			<?php echo $__env->make('admin.layout.left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<div class="page-body">
				<?php echo $__env->yieldContent("content"); ?>
				
			</div>
			<?php echo $__env->make('admin.layout.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
	</div>
	<?php echo $__env->yieldContent('js'); ?>
	<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/jquery.nestable.js"></script>
	<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/jquery.loadingModal.js"></script>
	<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/jquery.tagsinput.min.js"></script>
	<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/bootstrap-fileinput.js"></script>
	<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/toastr.min.js"></script>
	<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/sweet-alert/sweetalert.min.js"></script>
	<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/jquery.masknumber.js"></script>
	<script src="<?php echo e(asset('assets/admin')); ?>/assets/tinymce/tinymce.min.js" type="text/javascript"></script>
	<script src="<?php echo e(asset('assets/admin')); ?>/assets/js/admin.js?v=1"></script>
	<script>
		$(document).ready(function(){			
			$(".btn.red").click(function(){
				$(this).parent().find("input[type='hidden']").val('');
			});
			$('.mask_number').maskNumber({integer:true});
			$('.tags_input').tagsInput();
			$('.mask_number').change(function(){
				if($(this).val() == ''){
					$(this).val(0);
				}
			});
		});
	</script>
	
</body>

</html><?php /**PATH D:\laragon\www\htc\resources\views/admin/layout/hometemplate.blade.php ENDPATH**/ ?>