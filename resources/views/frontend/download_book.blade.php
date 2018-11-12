<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Download Book</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="frontend/css/home.css">
</head>
<body>
	@include('components.header')
	<section id="content">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 pr-lg-5">
							<div class="mb-lg-3">
								<ul class="breadcrumb-menu">
								  <li><a href="" title=""><b>Học PHP</b></a></li>
								  <li><a href="" title=""><b>Tự học PHP</b></a></li>
								  <li><a href="" title=""><b>PHP nâng cao</b></a></li>
								</ul>
							</div>
							<div class="mt-lg-3">
								<h1 style="font-size: 24px; font-weight: 700">SÁCH HAY CƠ SỞ DỮ LIỆU MYSQL</h1>
							</div>
							<div class="mt-lg-4">
								@for($i=1;$i<=5;$i++)
								<div class="jumbotron jumbotron-fluid">
									<div class="container">
										<div class="row">
											<div class="col-lg-3">
												<div class="d-flex">
													<h3 style="font-size: 15px;margin-top: -3rem">FEATURED WRITTER</h3>
												</div>
												<div class="avatar d-flex">
													<img src="images/4.png" style="border: 2px solid #fff;width: 100%;border-radius: 50%;">
												</div>
												<div class="text-center">
													<a href="#" class="btn btn-outline-dark" style="margin-bottom: -4rem">Download</a>
												</div>
											</div>
											<div class="col-lg-9">
												<h5>Fluid jumbotron</h5>
												<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
											</div>
										</div>
									</div>
								</div>
								@endfor
							</div>
						</div>
						<div class="col-lg-4 ml-auto">
							<div class="sidebar">
									<div class="w-100 mt-lg-5">
										<h4>Tag Popular in PHP</h4>
									</div>
									<div class="clearfix">
										<hr>
									</div>
									<div class="tag">
										<ul class="tag__list">
											@for($i=1;$i<=20;$i++)
											<li class="tag__list--item"><a href="#" title="">PHP</a></li>
											@endfor
											@for($i=1;$i<=20;$i++)
											<li class="tag__list--item"><a href="#" title="">Laravel</a></li>
											@endfor
											@for($i=1;$i<=20;$i++)
											<li class="tag__list--item"><a href="#" title="">Jquery</a></li>
											@endfor
										</ul>
									</div>
									<div class="mt-lg-5">
										<div class="w-100">
											<h4>Popular in PHP</h4>
										</div>
										<div class="clearfix">
											<hr>
										</div>
										@for($i=1;$i<=4;$i++)
										<div class="item">
											<div class="item-logo d-inline-flex justify-content-center align-content-center">
												<img src="images/3.png" alt="Responsive image" width="85px" height="80px">
											</div>
											<div class="type-1-text1 pl-3">
												<div class="mb-lg-2">
													<h4>The End of Snap and Tesla</h4>
													<p class="text-collapse">Snapchat and Tesla were sold this week. They just don't know it yet</p>
												</div>
												<div class="">
													<div class="text-collapse"><span>Scott Galloway in No Mercy / No Malice</span></div>
													<div class="time"><span>Oct 2 - 7 min read <i class="fas fa-star"></i></span></div>
												</div>
											</div>
										</div>
										@endfor
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
	<footer id="footer">
		<div class="container">
			<p>
				<a href="#" title="">Giới Thiệu</a> 
				<a href="#" title="">Blog</a> 
				<a href="#" title="">Việc Làm</a> 
				<a href="#" title="">Danh Sách Thẻ</a> 
				<a href="#" title="">Người Dùng</a> 
				<a href="#" title="">Liên Hệ</a> 
			</p> 
			<p>Thiết kế và phát triển bởi team <a href="" title="">123Job.vn</a></p>
		</div>
	</footer>
</body>
</html>