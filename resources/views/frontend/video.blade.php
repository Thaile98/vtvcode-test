@extends('master')
@section('content')
		<div class="box">
			<div>
				@include('components.sub_menu')
			</div>
			<div class="height-20">
				
			</div>
			<div>
				@include('components.breadcrumb')
			</div>
			<div class="height-20">
				
			</div>
			<div class="page-title">
				<h1>danh sách video học lập trình</h1>
			</div>
			<div class="height-20">
				
			</div>
			<div class="list-box-video">
				@for($i=1;$i<=15;$i++)
					@include('components.box_video_item')
				@endfor
			</div>
		</div>
@endsection