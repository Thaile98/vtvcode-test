@extends('master')
@section('content')
	<div>
		<div>
			@include('components.sub_menu')
		</div>
		<div class="height-20">
			
		</div>
		<div class="container-handle">
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
				<div class="aside__item">
					<div class="aside__item-heading d-flex align-items-center">
						<div class="heading-flex d-flex align-items-start justify-content-between">
							<span class="heading-title">
								<a class="" href="#">Danh Sách Bài Học Lập Trình PHP Cơ Bản</a>
							</span>
						</div>
					</div>
				</div>
				@for($i=1;$i<=5;$i++)
				<div class="aside__item">
					@include('components.article_most_view')
				</div>
				@endfor
				<div class="aside__item d-flex justify-content-end">
					<a href="#" title="" class="view-all-lession">Xem hết các bài học</a>
				</div>
				<div class="height-40">
				</div>
				<div class="aside__item">
					<div class="aside__item-heading d-flex align-items-center">
						<div class="heading-flex d-flex align-items-start justify-content-between">
							<span class="heading-title">
								<a class="" href="#">Danh Sách Bài Học Lập Trình PHP Cơ Bản</a>
							</span>
						</div>
					</div>
				</div>
				@for($i=1;$i<=5;$i++)
				<div class="aside__item">
					@include('components.article_most_view')
				</div>
				@endfor
				<div class="aside__item d-flex justify-content-end">
					<a href="#" title="" class="view-all-lession">Xem hết các bài học</a>
				</div>
				<div class="height-40">
				</div>
				<div class="aside__item">
					<div class="aside__item-heading d-flex align-items-center">
						<div class="heading-flex d-flex align-items-start justify-content-between">
							<span class="heading-title">
								<a class="" href="#">Chủ đề mọi người quan tâm nhất</a>
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
		</div>
	</div>
@endsection