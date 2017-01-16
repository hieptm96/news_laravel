@if(count($errors) > 0)
<div class="alert alert-danger">
	<ul class="list-inline">
		@foreach($errors->all() as $error)
		<li>
			<strong>{!! $error !!}</strong><br>
		</li>
		@endforeach
	</ul>
</div>
@endif