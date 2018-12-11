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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		window.addEventListener("load",function(event){
        	window.onscroll = function() {myFunction()};

                var menu_fixed = document.getElementById("menu-responsive");
        	var profile_fixed = document.getElementById("profile-dropdown");
        	var sticky = menu_fixed.offsetTop;

        	function myFunction() {
        	  if (window.pageYOffset > sticky) {
                    menu_fixed.classList.add("fixed-menu");
        	    profile_fixed.classList.add("profile-fixed");
        	  } else {
                    menu_fixed.classList.remove("fixed-menu");
        	    profile_fixed.classList.remove("profile-fixed");
        	  }
        	}
            $('.profile-image').click(function(){
                $('.profile-dropdown').fadeToggle(); 
            });
            $("body").on("click", function () {
                $(".profile-dropdown").fadeOut();
            });
            $(".profile-image").on("click", function (t) {
                t.stopPropagation();
            });
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