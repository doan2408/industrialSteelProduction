<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description" content="<?php echo $__env->yieldContent('desc'); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/frontend')); ?>/assets/media/favicon.png">
    <title><?php echo $__env->yieldContent('title'); ?></title>
	<?php echo $__env->yieldContent('facebooktag'); ?>
	<?php echo $__env->yieldContent('css'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('assets/frontend')); ?>/css/toastr.min.css">
	<link rel="stylesheet" href="<?php echo e(asset('assets/frontend')); ?>/css/jquery.loadingModal.css">
	<link rel="stylesheet" href="<?php echo e(asset('assets/frontend')); ?>/datetimepicker/jquery.datetimepicker.css">
</head>

<body>
	
	<?php echo $__env->make('frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->yieldContent("content"); ?>
	
	<?php echo $__env->make('frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="bottom-mb-nav">
		<a href="<?php echo e(route('guarantee')); ?>">
			<i class="fa-regular fa-shield-check"></i>
			Kích hoạt
		</a>
		<a href="<?php echo e(route('history')); ?>">
			<i class="fa-regular fa-file-magnifying-glass"></i>
			Tra cứu
		</a>
		<a href="<?php echo e(route('extend')); ?>">
			<i class="fa-regular fa-shield"></i>
			Gia hạn
		</a>
		<a href="<?php echo e(route('faq')); ?>">
			<i class="fa-regular fa-headset"></i>
			Hỗ trợ
		</a>
	</div>
	
	<?php echo $__env->yieldContent('js'); ?>
	<script src="<?php echo e(asset('assets/frontend')); ?>/js/jquery.loadingModal.js"></script>
	<script src="<?php echo e(asset('assets/frontend')); ?>/js/toastr.min.js"></script>
	<script src="<?php echo e(asset('assets/frontend')); ?>/datetimepicker/jquery.datetimepicker.full.min.js"></script>
	<script>
		$('.datetimepicker').datetimepicker({
			  timepicker:false,
			  format:'d-m-Y',
			  maxDate:0
			});
		$(document).on("click",'.btncontact', function () {
			$.ajaxSetup({
			  headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  }
			});	
			$.ajax({
				url: "<?php echo e(route('contact')); ?>",
				type: 'POST',
				dataType: 'json',
				data:{name:$("#cname").val(),email:$("#cemail").val(),content:$("#cnote").val(),phone:$("#cphone").val()},
				success: function (data, textStatus, jqXHR) {	
					if(data.check==0){
						toastr.error(data.content, ''); 
					}else if(data.check==1){
						toastr.success(data.content, ''); 
						$("#frm")[0].reset();
					}
				}
			});
			
		});
		
		$(document).on("keyup",'.autocomplete', function () {
			$.ajaxSetup({
			  headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  }
			});	
			$.ajax({
				url: "<?php echo e(route('autocomplete')); ?>",
				type: 'POST',
				dataType: 'json',
				data:{keyword:$(this).val()},
				success: function (data, textStatus, jqXHR) {						
					$(".header-search-result").html(data.html);					
				}
			});
			
		});
	</script>
</body>

</html><?php /**PATH F:\wamp64\www\baohanh\resources\views/frontend/hometemplate.blade.php ENDPATH**/ ?>