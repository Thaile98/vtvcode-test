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
				@yield('content')
				</div>
			</div>
	</section>
	
	@include('components.footer')
</body>
</html>