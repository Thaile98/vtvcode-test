<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
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
						<div>
							<div class="d-flex">
								<div class="w-50">
									<h4>Featured for members</h4>
								</div>
								<div class="d-inline-flex justify-content-end w-50">
									<a href="#" title="" style="color:#666"><span>MORE   <i class="fa fa-chevron-right" style="font-size: 12px"></i></span></a>
								</div>
							</div>
							<div class="clearfix">
								<hr width="29%" class="float-left" style="border-top: 1px solid #333;">
								<hr width="71%" class="float-left" >
							</div>
							<div class="big-post">
								@include('components.big_post_item')
							</div>
						</div>
						<div>
							<div class="d-flex">
								<div class="w-50">
									<h4>Featured for members</h4>
								</div>
								<div class="d-inline-flex justify-content-end w-50">
									<a href="#" title="" style="color:#666"><span>MORE   <i class="fa fa-chevron-right" style="font-size: 12px"></i></span></a>
								</div>
							</div>
							<div class="clearfix">
								<hr width="29%" class="float-left" style="border-top: 1px solid #333;">
								<hr width="71%" class="float-left" >
							</div>
							<div class="big-post">
								@include('components.big_post_item')
							</div>
						</div>
					</div>
					<div class="col-lg-4 ml-auto">
						<div class="">
							<div class="d-flex">
								<div class="w-100">
									<h4>Popular on Medium</h4>
								</div>
							</div>
							<div class="clearfix">
								<hr>
							</div>
							@include('components.post_item')
						</div>
						<div class="" style="margin-top: 120px">
							<div class="d-flex">
								<div class="w-100">
									<h4>Popular on Medium</h4>
								</div>
							</div>
							<div class="clearfix">
								<hr>
							</div>
							@include('components.list_tag')
						</div>
					</div>
				</div>
			</div>
	</section>
	@include('components.footer')
</body>
</html>