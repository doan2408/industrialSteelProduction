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
		{{$data->description}}
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
						<li><a href="{{route('project')}}">Dự án</a></li>
						<li>{{$data->name}}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="content-block">
		<div class="section-full content-inner project-detail">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 m-b30">
						<h2 class="text-black font-weight-600 m-b15">{{$data->name}}</h2>
						<p>{{$data->description}}</p>
						<div class="row widget widget_getintuch widget_getintuch-pro-details m-lr0">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
								<div class="pro-details">
									<i class="fa-regular fa-user"></i>
									<strong>Khách hàng</strong>{{$data->client}}
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
								<div class="pro-details">
									<i class="fa-regular fa-location-dot"></i>
									<strong>Địa điểm</strong>{{$data->address}}
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
								<div class="pro-details">
									<i class="fa-regular fa-maximize"></i>
									<strong>Diện tích</strong>{{$data->dimension}}<sup>2</sup>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
								<div class="pro-details">
									<i class="fa-regular fa-house-blank"></i>
									<strong>Loại hình</strong>{{$data->type}}
								</div>
							</div>
						</div>
						{!!$data->content!!}
					</div>
					<div class="col-lg-6 project-image">
						<div class="row">
							<div class="col-lg-12 m-b30">
								<img src="{{$data->image1}}" alt="{{$data->name}}">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
								<img alt="{{$data->name}}" src="{{$data->image2}}">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
								<img alt="{{$data->name}}" src="{{$data->image3}}">
							</div>
							<div class="col-lg-12 m-b30">
								<img src="{{$data->image4}}" alt="{{$data->name}}">
							</div>
							<div class="col-lg-12 m-b30">
								<img src="{{$data->image5}}" alt="{{$data->name}}">
							</div>
						</div>
					</div>
				</div>
				@if(isset($product) && count($product)>0)
				
				<div class="row">
					<div class="col-lg-12">
						<h3 class="m-b20">Sản phẩm được dùng trong dự án</h3>
						<div class="product-grid">
							@foreach($product as $item)
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
</div>
@include('frontend.bottom')
	
@endsection