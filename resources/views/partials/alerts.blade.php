@if (Session::has('info'))
	<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Success!</strong> {{ Session::get('info') }}
	</div>
@endif

@if (Session::has('danger'))
	<div class="alert alert-danger" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Error!</strong> {{ Session::get('danger') }}
	</div>
@endif