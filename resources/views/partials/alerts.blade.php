@if (Session::has('info'))
	<div class="alert alert-success" role="alert">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Success!</strong> {{ Session::get('info') }}
	</div>
@endif

@if (Session::has('danger'))
	<div class="alert alert-danger" role="alert">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Error!</strong> {{ Session::get('danger') }}
	</div>
@endif