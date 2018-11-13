<header id="header">
	<div class="container">
		<div class="row">
			@include('components.logo')	
			@include('components.menu_header')
		</div>
		@if(\Request::is('home'))
			<div class="row">
				<div class="col-lg-4">
					<div class="post-item__image" style="margin-bottom: 30px">
						<img src="images/4.png" alt="" width="100%">
					</div>
					<div class="post-item__content">
						<div class="post-item__content-top" style="margin-bottom: 15px">
							<h4>The End of Snap and Tesla abc 123 abc</h4>
							<p class="text-collapse">Snapchat and Tesla were sold this week. They just don't know it yet</p>
						</div>
						<div class="">
							<span class="text-collapse">Scott Galloway in No Mercy / No Malice</span>
							<span>Oct 2 - 7 min read <i class="fas fa-star"></i></span>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					@for($i=1;$i<=3;$i++)
					<div class="post-item">
						<div class="post-item__logo d-inline-flex justify-content-center align-content-center">
							<img src="images/4.png" alt="Responsive image" width="85px" height="80px">
						</div>
						<div class="post-item__detail pl-3">
							<div style="max-height: 70%">
								<h4>The End of Snap and Tesla abc 123 abc</h4>
								<p class="text-collapse">Snapchat and Tesla were sold this week. They just don't know it yet</p>
							</div>
							<div class="">
								<span class="text-collapse">Scott Galloway in No Mercy / No Malice</span>
								<span>Oct 2 - 7 min read <i class="fas fa-star"></i></span>
							</div>
						</div>
					</div>
					@endfor
				</div>
				<div class="col-lg-4">
					<div class="post-item__image" style="margin-bottom: 30px">
						<img src="images/4.png" alt="" width="100%">
					</div>
					<div class="post-item__content">
						<div class="post-item__content-top" style="margin-bottom: 15px">
							<h4>The End of Snap and Tesla abc 123 abc</h4>
							<p class="text-collapse">Snapchat and Tesla were sold this week. They just don't know it yet</p>
						</div>
						<div class="">
							<span class="text-collapse">Scott Galloway in No Mercy / No Malice</span>
							<span>Oct 2 - 7 min read <i class="fas fa-star"></i></span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="d-flex justify-content-end">
						<a href="#" style="color: #1aa77d; font-weight: 600">SEE ALL FEATURED <i class="fa fa-arrow-right" style="font-size: 14px"></i> </a>
					</div>
					<hr>
				</div>
			</div>
		@endif
	</div>
</header>