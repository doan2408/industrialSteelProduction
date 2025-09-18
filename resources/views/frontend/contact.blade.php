@extends("frontend.hometemplate")

@section("title")
{{App\Models\CommonModel::get_setting('setting_website_title')}}
@endsection
@section("desc")
{{App\Models\CommonModel::get_setting('setting_website_desc')}}
@endsection

@section("facebooktag")
<meta property="og:url" content="{{Request::url()}}" /> 
   <meta property="og:type" content="article" />   
   <meta property="og:title" content="{{App\Models\CommonModel::get_setting('setting_website_title')}}" />



<meta property="og:description" content="{{App\Models\CommonModel::get_setting('setting_website_desc')}}" />
   <meta property="og:image" content="{{asset(App\Models\CommonModel::get_setting('website_logo'))}}" />
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
@endsection

@section("body")
no-banner
@endsection

@section("content")
<div class="page-content">

	<div class="dlab-bnr-inr overlay-black-middle bg-pt">
		<div class="container">
			<div class="dlab-bnr-inr-entry">
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li><a href="{{asset('')}}">Trang chủ</a></li>
						<li>Liên hệ</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section-full content-inner bg-white contact-style-1">
		<div class="container">
			<div class="row">
				<div class="col-md-6 d-flex m-b30">
					<div class="p-a30 border contact-area border-1 align-self-stretch radius-sm">
						<h3 class="m-b30">Thông tin liên hệ</h3>
						<ul class="no-margin">
							<li class="icon-bx-wraper left m-b30">
								<div class="icon-bx-xs border-1">
									<i class="fa-solid fa-location-dot"></i>
								</div>
								<div class="icon-content">
									<h6 class="text-uppercase m-tb0 dlab-tilte">Địa chỉ nhà máy số 1:</h6>
									<a href="{{App\Models\CommonModel::get_setting('setting_map1')}}" target="_blank">{{App\Models\CommonModel::get_setting('setting_address1')}}</a>
									<h6 class="text-uppercase m-tb0 dlab-tilte">Địa chỉ nhà máy số 2:</h6>
									<a href="{{App\Models\CommonModel::get_setting('setting_map2')}}" target="_blank">{{App\Models\CommonModel::get_setting('setting_address2')}}</a>
								</div>
							</li>
							<li class="icon-bx-wraper left m-b30">
								<div class="icon-bx-xs border-1">
									<i class="fa-solid fa-envelope"></i>
								</div>
								<div class="icon-content">
									<h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
									<p><a href="mailto:{{App\Models\CommonModel::get_setting('setting_email')}}">{{App\Models\CommonModel::get_setting('setting_email')}}</a>
									</p>
								</div>
							</li>
							<li class="icon-bx-wraper left m-b30">
								<div class="icon-bx-xs border-1">
									<i class="fa-solid fa-phone"></i>
								</div>
								<div class="icon-content">
									<h6 class="text-uppercase m-tb0 dlab-tilte">Hotline:</h6>
									<p><a href="tel:{{App\Models\CommonModel::get_setting('setting_phone')}}">{{App\Models\CommonModel::get_setting('setting_phone')}}</a></p>
								</div>
							</li>
							<li class="icon-bx-wraper left">
								<div class="icon-bx-xs border-1">
									<i class="fa-regular fa-square-list"></i>
								</div>
								<div class="icon-content">
									<h6 class="text-uppercase m-tb0 dlab-tilte">Các phòng ban:</h6>
									<div class="grid-content">
										@if(isset($data) && count($data)>0)
										@foreach($data as $item)
										<a href="tel:{{$item->phone}}">{{$item->name}}: {{$item->phone}}</a>
										@endforeach
										@endif
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-6 d-flex m-b30">
					<div class="map">
						{!!App\Models\CommonModel::get_setting('setting_map')!!}
					</div>
				</div>

			</div>
		</div>
	</div>
				
	
</div>

@endsection