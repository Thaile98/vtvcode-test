<header id="header">
	<div class="container-handle flex-column">
		@include('components.logo')	
		@include('components.menu_header')
		@if(\Request::is('home'))
		<div class="row">
			<div class="col-md-4">
				<div class="post-item">
					<div class="post-item__image" style="margin-bottom: 20px">
						<a href="/post-detail-1"><img src="/images/4.PNG" alt="" width="100%" height="200px"></a>
					</div>
					<div class="post-item__content">
						<div class="post-item__content-top" style="margin-bottom: 10px">
							<a href="/post-detail-1" style="font-size: 20px;color: #000000"><h4>Tổng hợp các plugin cần có	 cho sublime text 3x</h4></a>
							<p class="">Stop waiting for us to explain everything, and start doing the work</p>
						</div>
						<div class="">
							<span class="" style="margin-right: 20px">Nov 30</span>
							<span class="">2k lượt ghé xem</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">	
				@for($i=1;$i<=3;$i++)
					@include('components.article_header_item')
				@endfor
			</div>
			<div class="col-md-4">
				<div class="post-item">
					<div class="post-item__image" style="margin-bottom: 20px">
						<a href="/post-detail-1"><img src="/images/4.PNG" alt="" width="100%" height="200px"></a>
					</div>
					<div class="post-item__content">
						<div class="post-item__content-top" style="margin-bottom: 10px">
							<a href="/post-detail-1" style="font-size: 20px;color: #000000"><h4>Tổng hợp các plugin cần có	 cho sublime text 3x</h4></a>
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
	</div>
</header>