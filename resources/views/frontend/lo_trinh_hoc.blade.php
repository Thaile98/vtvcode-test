<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lo Trinh Hoc</title>
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
					<div class="col-lg-12 mt-lg-4 mb-lg-3">
						@include('components.breadcrumb')
					</div>
					<div class="col-lg-8 pr-lg-5">
						<div class="big-post">
							@include('components.big_post_item')
						</div>
					</div>
					<div class="col-lg-4 ml-auto">
						<div class="sidebar">
							<div class="d-flex">
								<div class="w-100">
									<h4>Tags Popular in PHP</h4>
								</div>
							</div>
							<div class="clearfix">
								<hr>
							</div>
							<div class="row">
								@include('components.popular_tag')	
							</div>
							<div class="d-flex mt-lg-5">
								<div class="w-100">
									<h4>Tags Popular in PHP</h4>
								</div>
							</div>
							<div class="clearfix">
								<hr>
							</div>
							<div class="row">
								@include('components.popular_tag')	
							</div>
						</div>
						<div class="mt-lg-5">
							<div class="d-flex">
								<div class="w-100">
									<h4>Tag Popular in PHP</h4>
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
</body>
</html>