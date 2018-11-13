@extends('master')
@section('content')
						<div class="col-lg-8 pr-lg-5">
							<div class="clearfix">
								<hr>
							</div>
							<div class="big-post">
								@include('components.big_post_item')
							</div>
						</div>
						<div class="col-lg-4 ml-auto">
							<div class="sidebar">
								<div class="w-100">
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
@endsection	