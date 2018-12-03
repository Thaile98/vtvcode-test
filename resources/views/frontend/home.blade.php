@extends('master')
@section('content')
	<div class="main-content">
		<div class="main-content__item">
			<header class="main-content__item-heading d-flex align-items-center">
				<div class="heading-flex d-flex align-items-start justify-content-between">
					<span class="heading-title">
						<a class="" href="#">Bài viết laravel mới nhất</a>
					</span>
				</div>
			</header>
		</div>
		@for($i=1;$i<=5;$i++)
		<div class="main-content__item">
			@include('components.article_content_item')
		</div>
		@endfor
		<div class="main-content__item">
			<header class="main-content__item-heading d-flex align-items-center">
				<div class="heading-flex d-flex align-items-start justify-content-between">
					<span class="heading-title">
						<a class="" href="#">Bài viết laravel mới nhất</a>
					</span>
				</div>
			</header>
		</div>
		@for($i=1;$i<=5;$i++)
		<div class="main-content__item">
			@include('components.article_content_item')
		</div>
		@endfor
	</div>
	<div class="aside">
		<div class="aside__item">
			<header class="aside__item-heading d-flex align-items-center">
				<div class="heading-flex d-flex align-items-start justify-content-between">
					<span class="heading-title">
						<a class="" href="#">Bài viết mọi người xem nhiều nhất</a>
					</span>
				</div>
			</header>
		</div>
		@for($i=1;$i<=5;$i++)
		<div class="aside__item">
			<article class="article-aside-home d-flex align-items-stretch">
				<div class="article-aside-home__img-number">
					0{{$i}}
				</div>
				<div class="article-aside-home__detail">
					<a class="article-detail__title" href="/post-detail-1">
						<h3>Nike and Boeing Are Paying Sci-Fi Writers to Predict Their Futures</h3>
					</a>
					<div class="article-detail__info d-flex justify-content-between">
						<div class="text-collapse">
							<div class="">
								<a class="" href="#">Brian Merchant in The New New</a>
							</div>
							<div class="">
								<span class="" style="margin-right: 10px">Nov 30</span>
								<span class="">2k lượt ghé xem</span>
							</div>
						</div>
					</div>
				</div>
			</article>
		</div>
		@endfor
		<div class="aside__item">
			<header class="aside__item-heading d-flex align-items-center">
				<div class="heading-flex d-flex align-items-start justify-content-between">
					<span class="heading-title">
						<a class="" href="#">Top ngôn ngữ lập trình nên học 2018</a>
					</span>
				</div>
			</header>
		</div>
		@for($i=1;$i<=5;$i++)
			<div class="aside__item">
				<div class="top-lang-item">
					<div class="top-lang-item__logo">
						<img src="{{asset('images/3.PNG')}}" alt="">
					</div>
					<div class="top-lang-item__title">
						<h5>html / css</h5>
						<span>php.net</span>
					</div>
					<div class="top-lang-item__info">
						<span>Xem lộ trình học</span>
						<p>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<i class="fa fa-star-o"></i>
						</p>
					</div>
				</div>
			</div>
		@endfor
		<div class="aside__item">
			<header class="aside__item-heading d-flex align-items-center">
				<div class="heading-flex d-flex align-items-start justify-content-between">
					<span class="heading-title">
					</span>
				</div>
			</header>
		</div>
		<div class="aside__item">
			<div class="list-link">
				<a href="#" title="" class="list-link__item"><span>Help</span></a>
				<a href="#" title="" class="list-link__item"><span>Status</span></a>
				<a href="#" title="" class="list-link__item"><span>Writers</span></a>
				<a href="#" title="" class="list-link__item"><span>Blog</span></a>
				<a href="#" title="" class="list-link__item"><span>Careers</span></a>
				<a href="#" title="" class="list-link__item"><span>Privacy</span></a>
				<a href="#" title="" class="list-link__item"><span>Terms</span></a>
				<a href="#" title="" class="list-link__item"><span>About</span></a>
			</div>
		</div>
	</div>
@endsection
