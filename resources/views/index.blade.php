@extends('layout')
@section('content')
<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="{{ asset('img/soufeel/gold1.jpg') }}">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>ИМЕННЫЕ КУЛОНЫ МЕЧТЫ</span>
							<p>
								Представьте, что вы имеете единственный на свете кулон, который готовили только для тебя...✨</br>
								Вот это ДА! 🤭
							</p>
						</div>
					</div>
					<!--div class="offer-card text-white">
						<span>от</span>
						<h2>5000 тг</h2>
						<p>Купить сейчас</p>
					</div-->
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="{{ asset('img/soufeel/gold2.jpg') }}">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>🎁Нәзік жандыларға ең қатты ұнайтын сыйлық қандай екенін білесіз бе?</span>
							<p>Ең үздік шеберлердің қолынан шыққан алқамыз ешкімде жоқ, ерекше сыйлық болатынына сөз береміз👌🏻 </p>
						</div>
					</div>
					<!--div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div-->
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->
<!-- Category section -->
<section class="category-section spad">
	<div class="container">
		<div class="row">
		
			<div class="col-lg-3 order-1 order-lg-1">
				<div class="filter-widget">
					<h2 class="fw-title">Категории</h2>
					<ul class="category-menu">
						@foreach($category_products as $category)
						<li>
							<a href="{{route('main_index', ['category_id' => $category->id])}}">{{$category->title}}</a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>

			<div class="col-lg-9  order-2 order-lg-2 mb-5 mb-lg-0">
				<div class="row">
					<div class="col-lg-12">
						<div class="text-center">
							<h2 class="border-b">{{$section_title}}</h2>
						</div>
					</div>
					@foreach($list_products_top as $product)
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									@if($product->old_price)
										<div class="tag-sale">Акция</div>
									@endif
									<a href="{{ $product->kind==1 ? route('main_product_detail', ['id' => $product->id]) : route('main_phote_product_detail', ['id' => $product->id]) }}">
										<img src="{{ asset('img/soufeel/'.$product->src) }}" alt="">
									</a>
									<div class="pi-links">
										<a href="#" class="wishlist-btn"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<span class="span-tg" style="color:#e81150;font-weight: bold;">{{$product->price}} тг</span>
									@if($product->old_price)
										<del>{{$product->old_price}} тг</del>
									@endif
									<p style="color:#9a9a9a;">{{$product->description}}</p>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Category section end -->
@endsection