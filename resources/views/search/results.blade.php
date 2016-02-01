@extends('partials.layout')

@section('title', 'gurustudent | Search results')

@section('content')
<h3>Search results for "{{ Request::input('query') }}"</h3>

@if(!$users->count())
	<p>No users found.</p>
@else
	<div class="row">
		<div class="col-lg-12">
			@foreach($users as $user)
				@include('partials.user.userblock')
			@endforeach
		</div>
	</div>		
	<div class="row">
		<div class="text-center">
			<hr />
			<p>&copy; gurustudent 2015, all rights reserved.</p>
		</div>
	</div>
@endif
@stop