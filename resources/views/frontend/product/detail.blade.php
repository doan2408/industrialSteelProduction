@extends("frontend.hometemplate")


@section("title")
@if(isset($data) && !empty($data))
	@if(isset($data->seotitle) && $data->seotitle!='')
	{{$data->seotitle}}
	@else
		{{$data->name}}
	@endif
@else
{{App\Models\CommonModel::get_setting('setting_website_title')}}
@endif
@endsection
@section("desc")
@if(isset($data) && !empty($data))
	@if(isset($data->seodesc) && $data->seodesc!='')
	{{$data->seodesc}}
	@else
		{{$data->name}}
	@endif
@else
{{App\Models\CommonModel::get_setting('setting_website_desc')}}
@endif
@endsection
@section("keyword")
{{App\Models\CommonModel::get_setting('setting_website_keyword')}}
@endsection

@section("facebooktag")
<meta property="og:url" content="{{Request::url()}}" /> 
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
   <meta property="og:image" content="{{asset($data->avatar)}}" />
@endsection

@section("css")
<link rel="stylesheet" href="{{asset('assets/frontend')}}/plugins/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="{{asset('assets/frontend')}}/plugins/owl-carousel/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend')}}/css/plugins.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend')}}/css/style.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend')}}/css/templete.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend')}}/css/pubweb.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend')}}/plugins/revolution/revolution/css/revolution.min.css">
@endsection

@section("js")
<script src="{{asset('assets/frontend')}}/js/jquery.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/wow/wow.js"></script>

<script src="{{asset('assets/frontend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/magnific-popup/magnific-popup.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/counter/waypoints-min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/counter/counterup.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/imagesloaded/imagesloaded.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/masonry/masonry-3.1.4.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/masonry/masonry.filter.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/lightgallery/js/lightgallery-all.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/scroll/scrollbar.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/owl-carousel/owl.carousel.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/dz.carousel.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/custom.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/countdown/jquery.countdown.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/rangeslider/rangeslider.js"></script>

<script src="{{asset('assets/frontend')}}/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{asset('assets/frontend')}}/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/rev.slider.js"></script>
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
@endsection
@section("body")
no-banner
@endsection
@section("content")
<input type="hidden" id="pid" value="{{$data->id}}"/>
<div class="page-content">

	<div class="dlab-bnr-inr overlay-black-middle bg-pt">
		<div class="container">
			<div class="dlab-bnr-inr-entry">
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li><a href="{{asset('')}}">Trang chủ</a></li>
						<li><a href="{{route('product')}}">Sản phẩm</a></li>
						<li>{{$data->name}}</li>
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
						@if($data->images!='')
						<?php $img=explode(',',$data->images);$i=0; ?>
						<div id="sync1" class="owl-carousel owl-theme owl-btn-center-lr m-b5 owl-btn-1 primary">
							@foreach($img as $im)
							<div class="item">
								<div class="mfp-gallery">
									<div class="dlab-box">
										<div class="dlab-thum-bx">
											<img src="{{$im}}" alt="image">
											<div class="overlay-icon">
												<span data-exthumbimage="{{$im}}"
													data-src="{{$im}}" class="check-km"
													title="{{$data->name}}">
													<i class="fa-regular fa-magnifying-glass"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div id="sync2" class="owl-carousel owl-theme owl-none">
							@foreach($img as $thumb)
							<div class="item">
								<div class="dlab-media">
									<img src="{{$thumb}}" alt="image">
								</div>
							</div>
							@endforeach
						</div>
						@endif
					</div>
				</div>
				<div class="col-md-7 col-lg-7 col-sm-12">
					<div class="cart sticky-top">
						<div class="dlab-post-title">
							<h1 class="post-title">{{$data->name}}</h1>
							<p>
								{{$data->description}}
							</p>
							{!!$data->specification!!}
							<div class="buttons">
								<a href="tel:{{App\Models\CommonModel::get_setting('setting_phone')}}" class="site-button btnhover20">Liên hệ ngay</a>
								<a download href="{{$data->pdf}}" class="site-button-secondry btnhover20">Xem PDF</a>
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
								{!!$data->used!!}
							</div>
							<div id="tab-pane2" class="tab-pane">
								{!!$data->content!!}
							</div>
						</div>
					</div>
				</div>
			</div>
			@if(isset($relate) && count($relate)>0)
			<div class="row">
				<div class="col-lg-12">
					<h3 class="m-b20">Sản phẩm tương tự</h3>
					<div class="product-grid">
						@foreach($relate as $item)
						<div class="dlab-box service-box-2">
							<div class="dlab-media radius-sm dlab-img-overlay1 dlab-img-effect rotate">
								<a href="{{route('product_detail', $item->slug)}}">
									<img src="{{$item->avatar}}" alt="{{$item->name}}">
								</a>
							</div>
							<div class="dlab-info">
								<h4 class="title">
									<a href="{{route('product_detail', $item->slug)}}">{{$item->name}}</a>
								</h4>
								<p>{{$item->description}}
								</p>
								<a href="{{route('product_detail', $item->slug)}}" class="link">Xem chi tiết <i
										class="fa-regular fa-arrow-right"></i></a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			@endif
		</div>
	</div>
</div>
@include('frontend.bottom')
	
@endsection