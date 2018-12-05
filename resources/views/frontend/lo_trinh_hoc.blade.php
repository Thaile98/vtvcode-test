@extends('master')
@section('css')
	<link rel="stylesheet" type="text/css" href="frontend/css/lo_trinh_hoc.css">
@endsection
@section('sub_menu')
	<div class="height-20">
			
	</div>
	@include('components.sub_menu')
@endsection
@section('content')
	<div class="main-content">
		@include('components.breadcrumb')
		<div class="height-20">
			
		</div>
		<div class="study-route">
			<div class="study-route__title">
				<h1>Lộ Trình Học PHP Cho Người Mới Bắt Đầu</h1>
			</div>
			<div class="study-route__introduce">
				<h2>Giới thiệu</h2>
				<p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML-embedded server-side scripting language and is especially suited for web development.
				</p>
			</div>
			<div class="study-route__desc">
				<h3>Lợi ích của PHP</h3>
				<p>
					- PHP is an open source software.<br>
					- PHP costs nothing, it is free to download and use.<br>
					- PHP is a server-side scripting language and is used for websites and the web applications.<br>
					- PHP scripts are executed on the server.<br>
					- PHP supports a wide range of databases.<br>
					- PHP runs on various platforms like Linux, Windows, Unix etc.<br>
					- PHP supports most web servers (for example Apache, IIS).<br>
					- PHP converses with several network protocols.<br>
				</p>
				<h3>Features of the w3resource PHP tutorials</h3>
				<p>In this series of tutorials, we have covered PHP 5 in detail. While creating this, we have to take care that learners can master the basics of PHP and can be prepared to develop web based applications.</p>
				<p>
					Here is a list of features we have included in all of the chapters :<br>
					1. We have started with a clear and simple description.<br>
					2. We have given a Syntax / Usage so that you can remember how to write it.<br>
					3. Example(s) to show how the associated concept is implemented.<br>
					4. We have shown the Output of the usage.<br>
					5. View the example in a browser.<br>
					6. Pictorial presentation to help you to understand the concept better.<br>
				</p>
				<p>
					Getting started with PHP<br>
					First, let’s get started with PHP by going through a brief introduction to PHP.
				</p>
				<p>
					Basic PHP tutorial<br>
					The basic PHP tutorial section helps you build a solid PHP foundation and teaches you how to apply PHP effectively.
				</p>
				<div class="d-flex justify-content-between">
					<div style="width: 50%">
						<ul style="list-style: none">
							@for($i=1;$i<=10;$i++)
							<li><a href="#" title="">PHP comment</a></li>
							@endfor
						</ul>
					</div>
					<div style="width: 50%">
						<ul style="list-style: none">
							@for($i=1;$i<=10;$i++)
							<li><a href="#" title="">PHP comment</a></li>
							@endfor
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="aside">
			<div class="aside__item-heading d-flex align-items-center">
				<div class="heading-flex d-flex align-items-start justify-content-between">
					<span class="heading-title">
						<a class="" href="#">Danh Sách Bài Học Lập Trình PHP Cơ Bản</a>
					</span>
				</div>
			</div>
		@for($i=1;$i<=5;$i++)
			@include('components.article_most_view')
		@endfor
		<div class="d-flex justify-content-end">
			<a href="#" title="" class="view-all-lession">Xem hết các bài học</a>
		</div>
		<div class="height-40">
		</div>
			<div class="aside__item-heading d-flex align-items-center">
				<div class="heading-flex d-flex align-items-start justify-content-between">
					<span class="heading-title">
						<a class="" href="#">Danh Sách Bài Học Lập Trình PHP Cơ Bản</a>
					</span>
				</div>
			</div>
		@for($i=1;$i<=5;$i++)
			@include('components.article_most_view')
		@endfor
		<div class="d-flex justify-content-end">
			<a href="#" title="" class="view-all-lession">Xem hết các bài học</a>
		</div>
		<div class="height-40">
		</div>
			<div class="aside__item-heading d-flex align-items-center">
				<div class="heading-flex d-flex align-items-start justify-content-between">
					<span class="heading-title">
						<a class="" href="#">Chủ đề mọi người quan tâm nhất</a>
					</span>
				</div>
			</div>
		@for($i=1;$i<=5;$i++)
			@include('components.top_lang_item')
		@endfor
			<div class="aside__item-heading d-flex align-items-center">
				<div class="heading-flex d-flex align-items-start justify-content-between">
					<span class="heading-title">
					</span>
				</div>
			</div>
			<div class="list-link">
				<a href="#" title="" class="list-link__item"><span>Help</span></a>
				<a href="#" title="" class="list-link__item"><span>Status</span></a>
				<a href="#" title="" class="list-link__item"><span>Writers</span></a>
				<a href="#" title="" class="list-link__item"><span>Blog</span></a>
				<a href="#" title="" class="list-link__item"><span>Careers</span></a>
				<a href="#" title="" class="list-link__item"><span>Privacy</span></a>
				<a href="#" title="" class="list-link__item"><span>Terms</span></a>
				<a href="#" title="" class="list-link__item"><span>About</span></a>
			</div>
	</div>
@endsection