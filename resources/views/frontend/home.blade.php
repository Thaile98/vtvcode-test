@extends('master')
@section('content')
	<div class="main-content">
		<div class="main-content__item">
			<div class="main-content__item-heading d-flex align-items-center">
				<div class="heading-flex d-flex align-items-start justify-content-between">
					<span class="heading-title">
						<a class="" href="#">Bài viết laravel mới nhất</a>
					</span>
				</div>
			</div>
		</div>
		@for($i=1;$i<=8;$i++)
		<div class="main-content__item">
			@include('components.article_content_item')
		</div>
		@endfor
		<div class="height-20">
		</div>
		<div class="main-content__item">
			<div class="main-content__item-heading d-flex align-items-center">
				<div class="heading-flex d-flex align-items-start justify-content-between">
					<span class="heading-title">
						<a class="" href="#">Bài viết laravel mới nhất</a>
					</span>
				</div>
			</div>
		</div>
		@for($i=1;$i<=7;$i++)
		<div class="main-content__item">
			@include('components.article_content_item')
		</div>
		@endfor
	</div>
	<div class="aside">
		<div id="aside-fixed">
			<div class="aside__item">
				<div class="aside__item-heading d-flex align-items-center">
					<div class="heading-flex d-flex align-items-start justify-content-between">
						<span class="heading-title">
							<a class="" href="#">Bài viết mọi người xem nhiều nhất</a>
						</span>
					</div>
				</div>
			</div>
			@for($i=1;$i<=5;$i++)
			<div class="aside__item">
				@include('components.article_most_view')
			</div>
			@endfor
		</div>
		<div class="height-20">
		</div>
		<div class="aside__item">
			<div class="aside__item-heading d-flex align-items-center">
				<div class="heading-flex d-flex align-items-start justify-content-between">
					<span class="heading-title">
						<a class="" href="#">Top ngôn ngữ lập trình nên học 2018</a>
					</span>
				</div>
			</div>
		</div>
		@for($i=1;$i<=5;$i++)
		<div class="aside__item">
			@include('components.top_lang_item')
		</div>
		@endfor
		<div class="aside__item">
			<div class="aside__item-heading d-flex align-items-center">
				<div class="heading-flex d-flex align-items-start justify-content-between">
					<span class="heading-title">
					</span>
				</div>
			</div>
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
