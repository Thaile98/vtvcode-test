<div>
	<?php dump(Auth::guard('admins')->user()->name); ?>
	@if(Entrust::can('create-post'))
		AHIHI
	@endif
</div>