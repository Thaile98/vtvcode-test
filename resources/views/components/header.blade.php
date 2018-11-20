<header id="header">
	<div class="container-handle">
		@include('components.logo')	
		@include('components.menu_header')
		@if(\Request::is('home'))
		<div class="row">
			<div class="col-md-4">
				<div class="post-item">
					<div class="post-item__image" style="margin-bottom: 30px">
						<a href="#"><img src="/images/4.PNG" alt="" width="100%"></a>
					</div>
					<div class="post-item__content">
						<div class="post-item__content-top" style="margin-bottom: 15px">
							<h4><a href="#" style="font-size: 20px;color: #333">The End of Snap and Tesla abc 123 abc</a></h4>
							<p class="text-collapse">Snapchat and Tesla were sold this week. They just don't know it yet</p>
						</div>
						<div class="">
							<a href="#" style="color: #333"><span class="text-collapse">Scott Galloway in No Mercy / No Malice</span></a>
							<br>
							<span>Oct 2 - 7 min read <i class="fas fa-star"></i></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				@for($i=1;$i<=3;$i++)
					@include('components.article_aside_item')
				@endfor
			</div>
			<div class="col-md-4">
				<div class="post-item">
					<div class="post-item__image" style="margin-bottom: 30px">
						<a href="#"><img src="/images/4.PNG" alt="" width="100%"></a>
					</div>
					<div class="post-item__content">
						<div class="post-item__content-top" style="margin-bottom: 15px">
							<h4><a href="#" style="font-size: 20px;color: #333">The End of Snap and Tesla abc 123 abc</a></h4>
							<p class="text-collapse">Snapchat and Tesla were sold this week. They just don't know it yet</p>
						</div>
						<div class="text-collapse">
							<a href="#" style="color: #333"><span class="text-collapse">Scott Galloway in No Mercy / No Malice</span></a>
							<br>
							<span>Oct 2 - 7 min read <i class="fas fa-star"></i></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="d-flex justify-content-end">
					<a href="#" style="color: #1aa77d; font-weight: 600;margin-top: 30px">SEE ALL FEATURED <i class="fa fa-arrow-right" style="font-size: 14px"></i> </a>
				</div>
				<hr>
			</div>
		</div>
		@endif
	</div>
</header>