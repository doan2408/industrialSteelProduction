@extends("frontend.hometemplate")


@section("title")
@if(isset($check) && !empty($check))
	@if(isset($check->seotitle) && $check->seotitle!='')
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
	@if(isset($check->seodesc) && $check->seodesc!='')
	{{$check->seodesc}}
	@else
		{{$check->description}}
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
   <meta property="og:title" content="
   @if(isset($check) && !empty($check))
	@if(isset($check->seofbtitle) && $check->seofbtitle!='')
	{{$check->seofbtitle}}
	@else
		{{$check->description}}
	@endif
@else
	
{{App\Models\CommonModel::get_setting('setting_website_title')}}
@endif
   " />



<meta property="og:description" content="
@if(isset($check) && !empty($check))
	@if(isset($check->seofbdesc) && $check->seofbdesc!='')
	{{$check->seofbdesc}}
	@else
		{{$check->description}}
	@endif
@else
	
{{App\Models\CommonModel::get_setting('setting_website_desc')}}
@endif
"/>
   <meta property="og:image" content="{{asset(App\Models\CommonModel::get_setting('website_logo'))}}" />
@endsection

@section("css")
<script type="application/ld+json">
{
   "@context": "https://schema.org",
   "@type": "NewsArticle",
   "url": "{{route('news')}}",
   "publisher":{
      "@type":"Organization",
      "name":"{{App\Models\CommonModel::get_setting('setting_website_title')}}",
      "logo":"{{App\Models\CommonModel::get_setting('setting_logo')}}"
   },
   "headline": "Tin tức",
   "mainEntityOfPage": "{{route('news')}}",
   "articleBody": "Tin tức",
   "image":[
      "{{App\Models\CommonModel::get_setting('setting_logo')}}"
   ],
   "datePublished":"{{date('Y-m-d H:i:s',time())}}"
}
</script>
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
						<li>@if(isset($check) && !empty($check)){{$check->name}}@else Tin tức @endif</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="blog-category">
						<ul>
							@if(isset($category) && count($category)>0)
							@foreach($category as $item)
							<li><a href="{{route('news_cate',$item->slug)}}" class="@if(isset($check) && $check->id == $item->id)active @endif">{{$item->name}}</a></li>
							@endforeach
							@endif
						</ul>
					</div>
				</div>
				@if(isset($data) && count($data)>0)
				@foreach($data as $item)
				<div class="col-lg-4 col-md-6">
					<div class="blog-post blog-grid blog-rounded blog-effect1">
						<div class="dlab-post-media dlab-img-effect rotate">
							<a href="{{route('news_detail',$item->slug)}}">
								<img src="{{$item->avatar}}" alt="{{$item->name}}">
							</a>
						</div>
						<div class="dlab-info p-a20 border-1">
							<div class="dlab-post-meta">
								<ul>
									<li class="post-date"> {{date('d/m/Y',$item->timepost)}} </li>
									<li class="post-author"> bởi {{$item->uname}} </li>
								</ul>
							</div>
							<div class="dlab-post-title">
								<h4 class="post-title"><a href="{{route('news_detail',$item->slug)}}">{{$item->name}}</a>
								</h4>
							</div>
							<div class="dlab-post-text">
								<p>{{$item->description}}</p>
							</div>
							<div class="dlab-post-readmore">
								<a href="{{route('news_detail',$item->slug)}}" title="Xem chi tiết" rel="bookmark"
									class="site-button btnhover14">Xem chi tiết</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="pagination-bx clearfix text-center">
						@if($data->links()!='')
						{{$data->links('frontend.pani')}}	
							
						@endif
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>
</div>

@endsection