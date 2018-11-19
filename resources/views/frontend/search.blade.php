@extends('master')
@section('content')
		<div class="search">
			<input class="input-search" type="search" name="" value="PHP">
		</div>
		@include('components.sub_menu')
		<hr>
		<div class="row">
			<div class="col-md-8">
				<div class="main-content">
						@for($i=1;$i<=10;$i++)
						<div class="main-content__item">
							@include('components.article_content_item')
						</div>
						@endfor
				</div>
			</div>
			<div class="col-md-4">
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
			</div>
		</div>
@endsection	