<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Post deatil 1</title>
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
						<div class="col-lg-8">
							@include('components.breadcrumb')
							@include('components.post_detail')
							
							<div class="row">
								@for($i=1;$i<=3;$i++)
								<div class="col-lg-4">
									<div class="box-item" style="border: 1px solid #ccc;border-radius: 5px">
										<div class="box-item__avatar">
											<img src="images/4.png" alt="Card image cap" width="100%">
										</div>
										<div class="box-item__title p-lg-3">
											<p>Related reads</p>
											<h5>Railink: Throughts and case study</h5>
										</div>
								   		<div class="box-item__img d-lg-inline w-25">
								   			<img src="images/4.png" style=" border: 2px solid #fff;
								   													    height: 45px;
								   													    width: 45px;
								   													    border-radius: 50%;
								   													    margin-left: 10px">
								   		</div>
									   	<div class="box-item__author d-lg-inline w-50 pl-lg-2">
			    							<p>
			    								<span>Dono Firman</span>
			    								<br>
			    								<span>10 min read</span>
			    							</p>
									   	</div>
									   	<div class="box-item__like d-lg-inline w-25 mt-lg-2">
									   		<span><i class="fab fa-angellist" style="font-size: 22px"></i> 65</span>
									   	</div>
									</div>
								</div>
								@endfor
							</div>
						</div>
						<div class="col-lg-4 ml-auto">
							<div class="sidebar">
								<div class="w-100 mt-lg-5">
									<h4>Tag Popular in PHP</h4>
								</div>
								<div class="clearfix">
									<hr>
								</div>
								@include('components.list_tag')
								<div class="mt-lg-5">
									<div class="w-100">
										<h4>Popular in PHP</h4>
									</div>
									<div class="clearfix">
										<hr>
									</div>
									@include('components.post_item')
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
	@include('components.footer')
</body>
</html>