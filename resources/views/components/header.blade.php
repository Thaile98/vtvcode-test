<header id="header">
	<div class="container-handle flex-column">
		<div class="logo d-flex">
			<a href="/home"><img src="/images/logo.PNG" alt="logo"></a>
		</div>
		@include('components.menu_header')
		@yield('sub_menu')
	</div>
</header>
@if(\Request::is('home'))
<div class="container-handle d-flex">
	<div class="header-item">
		<div class="post-item">
			<div class="post-item__image" style="margin-bottom: 20px">
				<a href="/post-detail-1"><img src="/images/1.PNG" alt="" width="100%" height="200px"></a>
			</div>
			<div class="post-item__content">
				<div class="post-item__content-top" style="margin-bottom: 10px">
					<h4 style="margin-bottom: 10px">
						<a href="/post-detail-1" style="font-size: 20px;color: #000000;font-weight: bold;">Tổng hợp các plugin cần có	 cho sublime text 3x</a>
					</h4>
					<p class="">Stop waiting for us to explain everything, and start doing the work</p>
				</div>
				<div class="">
					<span class="" style="margin-right: 20px">Nov 30</span>
					<span class="">2k lượt ghé xem</span>
				</div>
			</div>
		</div>
	</div>
	<div class="header-item">	
		@for($i=1;$i<=3;$i++)
			@include('components.article_header_item')
		@endfor
	</div>
	<div class="header-item">
		<div class="post-item">
			<div class="post-item__image" style="margin-bottom: 20px">
				<a href="/post-detail-1"><img src="/images/1.PNG" alt="" width="100%" height="200px"></a>
			</div>
			<div class="post-item__content">
				<div class="post-item__content-top" style="margin-bottom: 10px">
					<h4 style="margin-bottom: 10px">
						<a href="/post-detail-1" style="font-size: 20px;color: #000000;font-weight: bold;">Tổng hợp các plugin cần có	 cho sublime text 3x</a>
					</h4>
					<p class="">Stop waiting for us to explain everything, and start doing the work</p>
				</div>
				<div class="">
					<span class="" style="margin-right: 20px">Nov 30</span>
					<span class="">2k lượt ghé xem</span>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
