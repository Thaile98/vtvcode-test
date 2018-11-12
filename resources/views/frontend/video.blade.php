<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Video</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="frontend/css/home.css">
</head>
<body>
	<header id="header">
		<div class="container">
			<div class="toolbar-header">
				<div class="row">
					<div class="logo d-flex w-100 mb-lg-3">
						<img src="images/logo.png" alt="logo">
					</div>
				</div>
				<div class="row">
					@include('components.menu_header')
				</div>
			</div>
			@include('components.sub_menu')
		</div>
	</header>
	<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="page-title">
							<h1>Video hướng dẫn học php</h1>
						</div>
					</div>
					<div class="clearfix">
					</div>
					@include('components.box_item')
				</div>
			</div>
	</section>
</body>
</html>