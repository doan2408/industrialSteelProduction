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
<script>
$("input[name='payment']").click(function(){
	if($(this).val()==0){
		$(".dpayment").hide();
	}else{
		$(".dpayment").show();
	}
});
$(document).on("click",'.btncheckout', function () {
	$.ajaxSetup({
	  headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});	
	$.ajax({
		url: "<?php echo e(route('checkout_post')); ?>",
		type: 'POST',
		dataType: 'json',
		data:{name:$("#name").val(),phone:$("#phone").val(),address:$("#address").val(),note:$("#note").val(),email:$("#email").val(),ptype:$("input[name='payment']:checked").val()},
		beforeSend: function ( xhr ) {
			$('body').loadingModal({text: 'Đang xử lý'});
			var delay = function(ms){ return new Promise(function(r) { setTimeout(r, ms) }) };
			var time = 1000;
			delay(time).then(function() { $('body').loadingModal('animation', 'rotatingPlane').loadingModal('backgroundColor', 'gray'); return delay(time);})
		},	
		success: function (data, textStatus, jqXHR) {	
			if(data.check==0){
				toastr.error(data.content, ''); 
			}else{
				window.location.replace(data.content);
			}	
			var delay = function(ms){ return new Promise(function(r) { setTimeout(r, ms) }) };
			var time = 1000;
			delay(time).then(function() { $('body').loadingModal('destroy') ;} );
		}
	});		
	
});
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>

<?php 
$cartdata = \Cart::getContent();
$name='';
$phone='';
$email='';
if(\Auth::check()){
	$name=\Auth::user()->name;
	$phone=\Auth::user()->phone;
	$email=\Auth::user()->email;
}
?>
<main>
	<div class="section sec-1">
		<div class="container">
			<h2 class="title text-center">Thanh toán</h2>
			<div class="row justify-content-between">
				<div class="col-lg-6">
					<h3 class="sub-title">Thông tin khách hàng</h3>
					<form action="#">
						<div class="form-group">
							<input type="text" id="name" value="<?php echo e($name); ?>" class="form-control" placeholder="Họ tên">
						</div>
						<div class="form-group">
							<input type="text" id="email" value="<?php echo e($email); ?>" class="form-control" placeholder="Địa chỉ email">
						</div>
						<div class="form-group">
							<input type="text" id="phone" value="<?php echo e($phone); ?>" class="form-control" placeholder="Số địa thoại">
						</div>
						<div class="form-group">
							<input type="text" id="address" class="form-control" placeholder="Địa chỉ">
						</div>
						<div class="form-group">
							<textarea id="note" rows="4" class="form-control" placeholder="Ghi chú"></textarea>
						</div>
					</form>
				</div>
				<div class="col-lg-5">
					<h3 class="sub-title">Thông tin đơn hàng</h3>
					<ul class="product-list">
						<?php if(isset($cartdata) && count($cartdata)>0): ?>				
						<?php $__currentLoopData = $cartdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php 
								$img='';$slug='';
								if(count($item->attributes)>0){
									$slug = $item->attributes->slug;
									$img = $item->attributes->img;
									$data_attr = $item->attributes->data_attr;
								}
							?>
						<li>
							<div class="thumb">
								<img src="<?php echo e($img); ?>" alt="<?php echo e($item->name); ?>">
							</div>
							<div class="info">
								<h4 class="title"><?php echo e($item->name); ?>

								<?php if(isset($data_attr['variant_name'])): ?>
							(<?php echo e($data_attr['variant_name']); ?>)
							<?php endif; ?>
								</h4>
								<span><span class="price"><?php echo e(number_format($item->price)); ?>đ </span> x<?php echo e($item->quantity); ?></span>
							</div>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>
					</ul>
					<ul class="total-price">
						<li>
							<strong>Tổng tiền</strong>
							<span><?php echo e(number_format(\Cart::getTotal())); ?>đ</span>
						</li>
					</ul>
					<h3 class="sub-title">Phương thức thanh toán</h3>
					<ul class="payment">
						<li>
							<label for="radio1">
								<input type="radio" name="payment" value="0" checked id="radio1">
								Thanh toán COD
							</label>
						</li>
						<li>
							<label for="radio2">
								<input type="radio" name="payment" value="1" id="radio2">
								Quét mã QR
							</label>
						</li>
						
					</ul>
					<div class="dpayment" style="display:none">
							<?php echo App\Models\CommonModel::get_setting('setting_website_qr'); ?>

						</div>
					<a href="javascript:void(0)" class="button btncheckout">Thanh toán</a>
				</div>
			</div>
		</div>
	</div>
	<?php echo $__env->make('frontend.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\baohanh\resources\views/frontend/checkout.blade.php ENDPATH**/ ?>