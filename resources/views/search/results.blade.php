@extends('partials.layout')

@section('title', 'gurustudent | Search results')

@section('content')
<h3>Search results for "{{ Request::input('query') }}"</h3>

<hr />

@if(!$users->count())
	<p>No users found.</p>
@else
	<div class="row">
		@foreach($users as $user)
			<div class="col-lg-3">
				@include('partials.user.userblock')
			</div>
		@endforeach
	</div>		
	<div class="row">
		<div class="text-center">
			<hr />
			<p>&copy; gurustudent 2015, all rights reserved.</p>
		</div>
	</div>
@endif
@stop