@extends('master')
@section('content')
		@include('components.sub_menu')
		<div class="page-title">
			<h1>Video hướng dẫn học php</h1>
		</div>
		<div class="row">
			@for($i=1;$i<=15;$i++)
			<div class="col-md-4">
				@include('components.box_video_item')
			</div>
			@endfor
		</div>
@endsection