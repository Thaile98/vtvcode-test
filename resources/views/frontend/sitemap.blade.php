<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Site Map</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="frontend/css/home.css">
</head>
<body>
	@include('components.header')
	<section id="content">
			<div class="container">
				<div class="site__map">
					<div class="site__map--title text-center">
						<h1>SITEMAP HỌC LẬP TRÌNH - SÁCH HAY CỦA LẬP TRÌNH</h1>
					</div>
					<div class="mt-lg-5">
						<h2 style="font-size: 18px">HỌC LẬP TRÌNH FRONTEND</h2>
					</div>
					<div class="row">
						@for($i=1;$i<=14;$i++)
							<div class="site__map--item">
							    <div class="site__map--item__body">
									<h5 class="text-center">HTML</h5>
									<ul>
										<li><a href="#">Kiến thức học</a></li>
										<li><a href="#">Sách hay</a></li>
									</ul>
							    </div>
							</div>
						@endfor
					</div><div class="mt-lg-5">
						<h2 style="font-size: 18px">HỌC LẬP TRÌNH FRONTEND</h2>
					</div>
					<div class="row">
						@for($i=1;$i<=14;$i++)
							<div class="site__map--item">
							    <div class="site__map--item__body">
									<h5 class="text-center">HTML</h5>
									<ul>
										<li><a href="#">Kiến thức học</a></li>
										<li><a href="#">Sách hay</a></li>
									</ul>
							    </div>
							</div>
						@endfor
					</div><div class="mt-lg-5">
						<h2 style="font-size: 18px">HỌC LẬP TRÌNH FRONTEND</h2>
					</div>
					<div class="row">
						@for($i=1;$i<=14;$i++)
							<div class="site__map--item">
							    <div class="site__map--item__body">
									<h5 class="text-center">HTML</h5>
									<ul>
										<li><a href="#">Kiến thức học</a></li>
										<li><a href="#">Sách hay</a></li>
									</ul>
							    </div>
							</div>
						@endfor
					</div><div class="mt-lg-5">
						<h2 style="font-size: 18px">HỌC LẬP TRÌNH FRONTEND</h2>
					</div>
					<div class="row">
						@for($i=1;$i<=14;$i++)
							<div class="site__map--item">
							    <div class="site__map--item__body">
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
			</div>
	</section>
	@include('components.footer')
</body>
</html>