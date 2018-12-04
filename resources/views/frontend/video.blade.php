@extends('master')
@section('content')
		<div>
			@include('components.sub_menu')
		</div>
		<div class="page-title">
			<h1>Video hướng dẫn học php</h1>
		</div>
		<div class="d-flex">
			@for($i=1;$i<=15;$i++)
				@include('components.box_video_item')
			@endfor
			
		</div>
@endsection