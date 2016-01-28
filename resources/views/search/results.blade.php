@extends('partials.layout')

@section('title', 'gurustudent | Search results')

@section('content')
<h3>Search results for "{{ Request::input('query') }}"</h3>

<div class="row">
	<div class="col-lg-12">
		@include('partials.user.userblock')
	</div>
</div>		
<div class="row">
	<div class="text-center">
		<hr />
		<p>&copy; gurustudent 2015, all rights reserved.</p>
	</div>
</div>
@stop