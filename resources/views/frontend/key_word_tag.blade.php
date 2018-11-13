@extends('master')
@section('content')
					<div class="col-lg-12 mt-lg-4 mb-lg-3">
						@include('components.breadcrumb')
					</div>
					<div class="col-lg-8 pr-lg-5">
						<div class="big-post">
							@include('components.big_post_item')
						</div>
					</div>
					<div class="col-lg-4 ml-auto">
						<div class="">
							<div class="d-flex">
								<div class="w-100">
									<h4>Popular in PHP</h4>
								</div>
							</div>
							<div class="clearfix">
								<hr>
							</div>
							@include('components.post_item')
						</div>
						<div class="" style="margin-top: 120px">
							<div class="d-flex">
								<div class="w-100">
									<h4>Tag Popular in PHP</h4>
								</div>
							</div>
							<div class="clearfix">
								<hr>
							</div>
							@include('components.list_tag')
						</div>
					</div>
@endsection