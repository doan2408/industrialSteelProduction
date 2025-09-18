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

	const bannerSwiper = new Swiper('.small-slide-img.swiper', {
		loop: true,
		grabCursor: true,
		slidesPerView: '3',
		spaceBetween: 10,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev'
		},
		breakpoints: {
			767: {
				slidesPerView: 4,
				spaceBetween: 15,
			},
		},
	});
	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 30) {
			$('header').addClass('fixed');
		} else {
			$('header').removeClass('fixed');
		}

		if (scroll >= $('.sec-2').scrollTop()) {
			$('.product-tabs .nav-tabs').addClass('fixed')
		} else {
			$('.product-tabs .nav-tabs').removeClass('fixed')
		}
	})
</script>
<script>
function number_format (number, decimals, dec_point, thousands_sep) {
	var n = number, prec = decimals;
	var toFixedFix = function (n,prec) {
		var k = Math.pow(10,prec);
		return (Math.round(n*k)/k).toString();
	};
	n = !isFinite(+n) ? 0 : +n;
	prec = !isFinite(+prec) ? 0 : Math.abs(prec);
	var sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep;
	var dec = (typeof dec_point === 'undefined') ? '.' : dec_point;
	var s = (prec > 0) ? toFixedFix(n, prec) : toFixedFix(Math.round(n), prec); 
	//fix for IE parseFloat(0.55).toFixed(0) = 0;
	var abs = toFixedFix(Math.abs(n), prec);
	var _, i;
	if (abs >= 1000) {
		_ = abs.split(/\D/);
		i = _[0].length % 3 || 3;
		_[0] = s.slice(0,i + (n < 0)) +
		_[0].slice(i).replace(/(\d{3})/g, sep+'$1');
		s = _.join(dec);
	} else {
		s = s.replace('.', dec);
	}
	var decPos = s.indexOf(dec);
	if (prec >= 1 && decPos !== -1 && (s.length-decPos-1) < prec) {
		s += new Array(prec-(s.length-decPos-1)).join(0)+'0';
	}
	else if (prec >= 1 && decPos === -1) {
		s += dec+new Array(prec).join(0)+'0';
	}
	return s; 
}
$(document).on('click',".list_attr",function(){
	let list_attr = [];
	$(".list_attr").each(function(){
		if($(this).hasClass('active')){
			list_attr.push($(this).data('id'));
		}
	});
	$.ajaxSetup({
	  headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});
	$.ajax({
		url: "<?php echo e(route('attributes')); ?>",
		type: 'POST',
		dataType: 'json',
		data: {id: $("#pid").val(),list_attr:list_attr},
		success: function (data, textStatus, jqXHR) {
			$(".sprice").html(data.price);
			$(".dimages").html(data.images);
			const bannerSwiper = new Swiper('.small-slide-img.swiper', {
				loop: true,
				grabCursor: true,
				slidesPerView: '3',
				spaceBetween: 10,
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev'
				},
				breakpoints: {
					767: {
						slidesPerView: 4,
						spaceBetween: 15,
					},
				},
			});
			$(document).on('click',".small-slide-img .swiper-slide",function(){
				$(this).addClass('active');
				$('.small-slide-img .swiper-slide').not(this).removeClass('active');
				$('.large-img img').attr('src', $(this).find('img').attr('src'));
			});
		}
	});	
});
$(document).on('click',".add-cart",function(){
	$.ajaxSetup({
	  headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});
	let list_attr = [];
	$(".list_attr").each(function(){
		if($(this).hasClass('active')){
			list_attr.push($(this).data('id'));
		}
	});
	if(list_attr.length>0){
		$.ajax({
			url: "<?php echo e(route('add_cart')); ?>",
			type: 'POST',
			dataType: 'json',
			data: {id: $(this).data('id'),quantity:$("#qty").val(),action:$(this).data('action'),list_attr:list_attr},
			success: function (data, textStatus, jqXHR) {
				if(data.check==0){
					toastr.error(data.content, ''); 
				}else if(data.check==1){
					toastr.success(data.content, ''); 
					$('.quick-num').text(data.span);
				}else{
					window.location.replace(data.redirect);
				}
			}
		});	
	}else{
		toastr.error('Chưa chọn phân loại', ''); 
	}
});
$(document).ready(function() {
  $('.product-info-table table').addClass('table table-striped');
});
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<input type="hidden" id="pid" value="<?php echo e($data->id); ?>"/>
<main>
	<div class="section sec-1">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-4 dimages">
					<?php if($data->images!=''): ?>
						<?php $img=explode(',',$data->images);$i=0; ?>
					<div class="large-img">
						<img src="<?php echo e($img[0]); ?>" alt="<?php echo e($data->name); ?>">
					</div>
					<div class="small-slide-img swiper">
						<div class="swiper-wrapper">
							<?php $__currentLoopData = $img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $im): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="swiper-slide <?php if($i==0): ?>active <?php endif; ?>">
								<img src="<?php echo e($im); ?>" alt="<?php echo e($data->name); ?>">
							</div>
							<?php $i++; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>	
					<?php else: ?>
					<div class="large-img">
						<img src="<?php echo e($data->avatar); ?>" alt="<?php echo e($data->name); ?>">
					</div>
					<?php endif; ?>
				</div>
				<div class="col-lg-7">
					<div class="product-detail">
						<h1 class="title"><?php echo e($data->name); ?></h1>
						<span class="price sprice">
						<?php if($data->price != 0): ?>
							<?php if($data->pprice!=0): ?>
							<?php echo e(number_format($data->pprice)); ?>đ
							<span><del><?php echo e(number_format($data->price)); ?>đ</del><span class="sale">-<?php echo e(100-round($data->pprice/$data->price*100)); ?>%</span></span>	
							<?php else: ?>
							<?php echo e(number_format($data->price)); ?>đ
							<?php endif; ?>
						<?php else: ?> 
							Liên hệ 
						<?php endif; ?>

						</span>
						<div class="product-desc">
							<?php echo $data->description; ?>

						</div>
						
						<?php if(isset($attributes) && count($attributes)>0): ?>
						<?php $i=0; ?>
						<?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attrId => $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="product-options">
							<h3><?php echo e($attribute['name']); ?></h3>
							
							<ul class="attr<?php echo e($attrId); ?>">
								
								<?php if(isset($attribute['values']) && count($attribute['values'])>0): ?>
								<?php $__currentLoopData = $attribute['values']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valueId => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li>
										<span class="list_attr <?php if(!empty($selectedValues[$attrId]) && $selectedValues[$attrId] == $valueId): ?> active <?php endif; ?>" data-sku="<?php echo e($attribute['sku']); ?>" data-id="<?php echo e($valueId); ?>" data-attr="<?php echo e($attrId); ?>" data-name="attribute[<?php echo e($attrId); ?>]"><?php echo e($value); ?></span>
									</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
								<?php endif; ?>
								
							</ul>
							
						</div>
						<?php $i++; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
						
						<div class="buttons">
							<div class="quantity">
								<input type="number" id="qty" class="form-control" min="1" value="1">
							</div>
							<a href="javascript:void(0)" data-id="<?php echo e($data->id); ?>" class="button add-cart" data-action="addcart">Thêm vào giỏ</a>
							<a href="javascript:void(0)" data-id="<?php echo e($data->id); ?>" class="button add-cart" data-action="checkout">Mua ngay</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section sec-2 product-tabs">
		<div class="container">
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<button class="nav-link active" id="nav1-tab" 
					data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" 
					aria-controls="nav1" aria-selected="true">Thông tin chung</button>
					<button class="nav-link" id="nav2-tab" 
					data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" 
					aria-controls="nav2" aria-selected="false">Thông số cơ bản</button>
					<button class="nav-link" id="nav3-tab" 
					data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" 
					aria-controls="nav3" aria-selected="false">Phụ kiện liên quan</button>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav1" role="tabpanel" 
				aria-labelledby="nav1-tab" tabindex="0">
					<?php echo $data->content; ?>

				</div>
				<div class="tab-pane fade" id="nav2" role="tabpanel" 
				aria-labelledby="nav2-tab" tabindex="0">
					<div class="product-info-table">
						<?php echo $data->specification; ?>

						
					</div>
				</div>
				<div class="tab-pane fade" id="nav3" role="tabpanel" 
				aria-labelledby="nav3-tab" tabindex="0">
					<div class="row">
						<?php if(isset($listp) && count($listp)>0): ?>
						<?php $__currentLoopData = $listp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="product-box">
								<div class="product-thumb">
									<a href="<?php echo e(route('product_detail',$item->slug)); ?>"><img src="<?php echo e($item->avatar); ?>" alt="<?php echo e($item->name); ?>"></a>
								</div>
								<div class="product-content">
									<h3 class="product-title">
									<a href="<?php echo e(route('product_detail',$item->slug)); ?>"><?php echo e($item->name); ?></a>
									</h3>
									<span class="product-price"><?php if($item->price!=0): ?><?php echo e(number_format($item->price)); ?>đ <?php else: ?> Liên hệ <?php endif; ?></span>
									<div class="product-btns">
										<a href="<?php echo e(route('product_detail',$item->slug)); ?>" class="button">Xem chi tiết</a>
										<a href="javascript:void(0)" data-id="<?php echo e($item->id); ?>" class="button btn-add-cart">Thêm giỏ hàng</a>
									</div>
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

	<?php if(isset($relate) && count($relate)>0): ?>
	<div class="section sec-3">
		<div class="container">
			<h2 class="title text-center">Sản phẩm khác</h2>
			<div class="row">
				
				<?php $__currentLoopData = $relate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="product-box">
						<div class="product-thumb">
							<a href="<?php echo e(route('product_detail',$item->slug)); ?>"><img src="<?php echo e($item->avatar); ?>" alt="<?php echo e($item->name); ?>"></a>
							<?php if($item->quick_tag!=0): ?>
													<div class="product-tag">
														<?php if($item->quick_tag==1): ?> Preorder <?php else: ?> Mới <?php endif; ?>
													</div>
													<?php endif; ?>
						</div>
						<div class="product-content">
							<h3 class="product-title">
							<a href="<?php echo e(route('product_detail',$item->slug)); ?>"><?php echo e($item->name); ?></a>
							</h3>
							<span class="product-price">
							<?php if($item->price != 0): ?>
								<?php if($item->pprice!=0): ?>
								<?php echo e(number_format($item->pprice)); ?>đ
								<span><del><?php echo e(number_format($item->price)); ?>đ</del><span class="sale">-<?php echo e(100-round($item->pprice/$item->price*100)); ?>%</span></span>	
								<?php else: ?>
								<?php echo e(number_format($item->price)); ?>đ
								<?php endif; ?>
							<?php else: ?> 
								Liên hệ 
							<?php endif; ?>
							</span>
							<div class="product-btns">
								<a href="<?php echo e(route('product_detail',$item->slug)); ?>" class="button">Xem chi tiết</a>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php echo $__env->make('frontend.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.hometemplate", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\baohanh\resources\views/frontend/product/detail.blade.php ENDPATH**/ ?>