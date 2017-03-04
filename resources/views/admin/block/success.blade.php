@if (session('notification_success'))
	<div class="alert alert-success">
		<strong>{!! session('notification_success') !!}</strong>
	</div>
@endif