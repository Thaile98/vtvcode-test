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
        	window.onscroll = function() {myFunction()};

        	var aside_fixed = document.getElementById("menu-responsive");
        	var sticky = aside_fixed.offsetTop;

        	function myFunction() {
        	  if (window.pageYOffset > sticky) {
        	    aside_fixed.classList.add("fixed-menu");
        	  } else {
        	    aside_fixed.classList.remove("fixed-menu");
        	  }
        	}
		})
	</script>
	<script>
		window.addEventListener("load",function(event){
        	var menu = $(".menu-header");
        	$(".next-menu").click(function(){
        		if(menu.css("transform") === "matrix(1, 0, 0, 1, -267, 0)")
        		{
        			menu.css("transform","translateX(-590px)");
        		}
        		if(menu.css("transform") === "matrix(1, 0, 0, 1, 0, 0)")
        		{
        			menu.css("transform","translateX(-267px)");
        		}
        	});
        	$(".pre-menu").click(function(){
        		if(menu.css("transform") === "matrix(1, 0, 0, 1, -267, 0)")
        		{
        			menu.css("transform","translateX(0px)");
        		}
        		if(menu.css("transform") === "matrix(1, 0, 0, 1, -590, 0)")
        		{
        			menu.css("transform","translateX(-267px)");
        		}
        	});
		})
	</script>
</body>
</html>