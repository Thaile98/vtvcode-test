@extends('master')
@section('css')
	<link rel="stylesheet" type="text/css" href="frontend/css/post_detail.css">
@endsection
@section('content')
		<div class="main-content">
			@include('components.post_detail')
			<div class="list-box-video">
			@for($i=1;$i<=3;$i++)
					@include('components.box_video_item')
			@endfor
			</div>
		</div>
		<div class="aside">
			<div class="aside__item">
				<header class="aside__item-heading d-flex align-items-center">
					<div class="heading-flex d-flex align-items-start justify-content-between">
						<span class="heading-title">
							<a class="" href="#">Tag Popular in PHP</a>
						</span>
					</div>
				</header>
			</div>
			@for($i=1;$i<=5;$i++)
			<div class="aside__item">
				@include('components.article_aside_item')
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