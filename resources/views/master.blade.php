<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">
	@yield('css')
</head>
<body>
	<div class="menu-header-fixed d-none">
		<div class="container-handle">
			@include('components.menu_header')
		</div>
	</div>
	@include('components.header')
	<section id="content">
		<div class="container-handle">
			@yield('content')
		</div>
	</section>
	<div class="clearfix">
	</div>
	@include('components.footer')

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	<script>
		window.addEventListener("load",function(event){
        	$(window).bind("scroll", function () {
    			$(window).scrollTop() > 70 ? $(".menu-header-fixed").addClass("fixed-menu").removeClass("d-none") : $(".menu-header-fixed").removeClass("fixed-menu").addClass("d-none");
        	});

        	// window.onscroll = function() {myFunction()};

        	// var aside_fixed = document.getElementById("aside-fixed");
        	// var sticky = aside_fixed.offsetTop;

        	// function myFunction() {
        	//   if (window.pageYOffset > sticky - 20) {
        	//     aside_fixed.classList.add("aside-fixed-top");
        	//   } else {
        	//     aside_fixed.classList.remove("aside-fixed-top");
        	//   }
        	// }
		})
	</script>
</body>
</html>