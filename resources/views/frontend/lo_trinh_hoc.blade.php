@extends('master')
@section('content')
	<div class="mb-lg-5">
		@include('components.sub_menu')
		@include('components.breadcrumb')
	</div>
	<div class="row">
		<div class="col-lg-8">
			<div class="main-content">
				@for($i=1;$i<=10;$i++)
				<div class="main-content__item">
					@include('components.article_content_item')
				</div>
				@endfor
			</div>
		</div>
		<div class="col-lg-4">
			<div class="aside">
				<div class="aside__item">
					<header class="aside__item-heading d-flex align-items-center">
						<div class="heading-flex d-flex align-items-start justify-content-between">
							<span class="heading-title">
								<a class="" href="#">Tags Popular in PHP</a>
							</span>
						</div>
					</header>
				</div>
				<div class="aside__item">
					@include('components.popular_tag')
				</div>
				<div class="aside__item">
					<header class="aside__item-heading d-flex align-items-center">
						<div class="heading-flex d-flex align-items-start justify-content-between">
							<span class="heading-title">
								<a class="" href="#">Tags Popular in PHP</a>
							</span>
						</div>
					</header>
				</div>
				<div class="aside__item">
					@include('components.popular_tag')
				</div>
				<div class="aside__item">
					<header class="aside__item-heading d-flex align-items-center">
						<div class="heading-flex d-flex align-items-start justify-content-between">
							<span class="heading-title">
								<a class="" href="#">Tags Popular in PHP</a>
							</span>
						</div>
					</header>
				</div>
				<div class="aside__item">
					@include('components.list_tag')
				</div>
			</div>
		</div>
	</div>
@endsection