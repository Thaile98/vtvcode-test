@extends('master')
@section('content')
			<div class="site-map">
				<div class="site-map__title text-center">
					<h1>SITEMAP HỌC LẬP TRÌNH - SÁCH HAY CỦA LẬP TRÌNH</h1>
				</div>
				<div class="mt-lg-5">
					<h2 style="font-size: 18px">HỌC LẬP TRÌNH FRONTEND</h2>
				</div>
				<div class="row">
					@for($i=1;$i<=14;$i++)
					<div class="site-map__item">
					    <div class="site-map__item__body">
							<h5 class="text-center">HTML</h5>
							<ul>
								<li><a href="#">Kiến thức học</a></li>
								<li><a href="#">Sách hay</a></li>
							</ul>
					    </div>
					</div>
					@endfor
				</div>
				<div class="mt-lg-5">
					<h2 style="font-size: 18px">HỌC LẬP TRÌNH FRONTEND</h2>
				</div>
				<div class="row">
					@for($i=1;$i<=14;$i++)
						<div class="site-map__item">
						    <div class="site-map__item__body">
								<h5 class="text-center">HTML</h5>
								<ul>
									<li><a href="#">Kiến thức học</a></li>
									<li><a href="#">Sách hay</a></li>
								</ul>
						    </div>
						</div>
					@endfor
				</div>
				<div class="mt-lg-5">
					<h2 style="font-size: 18px">HỌC LẬP TRÌNH FRONTEND</h2>
				</div>
				<div class="row">
					@for($i=1;$i<=14;$i++)
						<div class="site-map__item">
						    <div class="site-map__item__body">
								<h5 class="text-center">HTML</h5>
								<ul>
									<li><a href="#">Kiến thức học</a></li>
									<li><a href="#">Sách hay</a></li>
								</ul>
						    </div>
						</div>
					@endfor
				</div>
				<div class="mt-lg-5">
					<h2 style="font-size: 18px">HỌC LẬP TRÌNH FRONTEND</h2>
				</div>
				<div class="row">
					@for($i=1;$i<=14;$i++)
						<div class="site-map__item">
						    <div class="site-map__item__body">
								<h5 class="text-center">HTML</h5>
								<ul>
									<li><a href="#">Kiến thức học</a></li>
									<li><a href="#">Sách hay</a></li>
								</ul>
						    </div>
						</div>
					@endfor
				</div>
			</div>
@endsection