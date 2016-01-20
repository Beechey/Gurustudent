@extends('partials.layout')

@section('title', 'gurustudent | Dashboard ')

@section('content')
<h1>Dashboard</h1>
<hr />
<div class="row">
	<div class="text-center">
		<h2>{{ Auth::user()->username }}'s questions</h2>
		<p>You haven't asked any questions yet...</p>
		<p>Do so by clicking <a href="/ask">here!</a></p>
	</div>
</div>
<div class="row">
	<hr />
	<div class="text-center">
		<p>&copy; gurustudent 2015, all rights reserved.</p>
	</div>
</div>
@stop