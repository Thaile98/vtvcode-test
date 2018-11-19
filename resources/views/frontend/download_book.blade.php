@extends('master')
@section('content')
	<div class="mb-lg-4">
		@include('components.breadcrumb')
	</div>
	<div class="row">
		<div class="col-lg-8">
			<div class="main-content">
				<div class="mt-lg-3">
					<h1 style="font-size: 24px; font-weight: 700">SÁCH HAY CƠ SỞ DỮ LIỆU MYSQL</h1>
				</div>
				<div class="mt-lg-4">
					@for($i=1;$i<=5;$i++)
					<div class="block" style="background-color: #f2f2f2;margin-bottom: 10px;padding: 10px 0">
						<div class="container">
							<div class="row">
								<div class="col-lg-3">
									<div class="text-center">
										<a href="#" style="font-size: 14px;text-transform: uppercase;font-weight: 600;color: #333">FEATUred WRITTER</a>
									</div>
									<div class="avatar" style="margin-top: 10px">
										<a href="#" ><img src="images/4.png" style="border: 2px solid #fff;width: 140px;height: 140px;border-radius: 50%;"></a>
									</div>
									<div class="text-center" style="margin-top: 10px">
										<a href="#" class="btn btn-outline-dark">Download</a>
									</div>
								</div>
								<div class="col-lg-9">
									<div class="flex-column" style="padding-top: 30px">
										<h5>Fluid jumbotron</h5>
										<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endfor
				</div>
			</div>
		</div>
		<div class="col-lg-4">
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
				<div class="aside__item">
					@include('components.list_tag')
				</div>
				<div class="aside__item">
					<header class="aside__item-heading d-flex align-items-center">
						<div class="heading-flex d-flex align-items-start justify-content-between">
							<span class="heading-title">
								<a class="" href="#">Popular in PHP</a>
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