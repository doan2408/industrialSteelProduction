@extends("frontend.hometemplate")


@section("title")
	@if(isset($check) && !empty($check))
		@if(isset($check->seotitle) && $check->seotitle != '')
			{{$check->seotitle}}
		@else
			{{$check->name}}
		@endif
	@else
		{{App\Models\CommonModel::get_setting('setting_website_title')}}
	@endif
@endsection
@section("desc")
	@if(isset($check) && !empty($check))
		@if(isset($check->seodesc) && $check->seodesc != '')
			{{$check->seodesc}}
		@else
			{{$check->name}}
		@endif
	@else
		{{App\Models\CommonModel::get_setting('setting_website_desc')}}
	@endif
@endsection
@section("keyword")
	{{App\Models\CommonModel::get_setting('setting_website_keyword')}}
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
$("#category").change(function(){
	if($(this).val()){
		window.location.replace($(this).val());
	}
});
</script>
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
						<li>@if(isset($check) && !empty($check)){{$check->name}}@else Sản phẩm @endif</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section-full content-inner">
		<div class="container">
			<div class="section-head text-center">
				@if(isset($check) && !empty($check))
				<h2 class="title">{{$check->name}}</h2>
				
					{!!$check->content!!}
				@else
				<h2 class="title">Sản phẩm của chúng tôi</h2>	
				
					{!!App\Models\CommonModel::get_setting('setting_product')!!}
				
				@endif
			</div>
			<div class="row">
				<div class="col-lg-4 m-b30">
					<select id="category">
						<option value="{{route('product')}}">Lọc theo danh mục</option>
						@if(isset($category) && count($category) > 0)
						@foreach($category as $item)
						<option value="{{route('product_cate', $item->slug)}}" @if(isset($check) && $check->id == $item->id) selected @endif>{{$item->name}}</option>
						@endforeach
						@endif
					</select>
				</div>
			</div>
			<div class="product-grid">
				@if(isset($data) && count($data) > 0)
				@foreach($data as $item)
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
						<a href="{{route('product_detail', $item->slug)}}" class="link">Xem chi tiết <i class="fa-regular fa-arrow-right"></i></a>
					</div>
				</div>
				@endforeach
				@endif
			</div>
		</div>
	</div>
</div>

@endsection