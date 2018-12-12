@extends('master')
@section('css')
	<link rel="stylesheet" type="text/css" href="frontend/css/key_word_tag.css">
@endsection
@section('sub_menu')
	<div class="height-20">
			
	</div>
	@include('components.sub_menu')
@endsection
@section('content')
			<div class="main-content">
				@for($i=1;$i<=15;$i++)
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
								<a class="" href="#">Popular on Medium</a>
							</span>
						</div>
					</header>
				</div>
				@for($i=1;$i<=5;$i++)
				<div class="aside__item">
					@include('components.article_most_view')
				</div>
				@endfor
				<div class="aside__item">
					<header class="aside__item-heading d-flex align-items-center">
						<div class="heading-flex d-flex align-items-start justify-content-between">
							<span class="heading-title">
								<a class="" href="#">Popular on Medium</a>
							</span>
						</div>
					</header>
				</div>
				<div class="aside__item">
					@include('components.list_tag')
				</div>
			</div>
@endsection