@extends('partials.layout')

@section('title', 'gurustudent | Dashboard ')

@section('content')
<h1>Dashboard</h1>
<hr />
<div class="row">
	<div class="text-center">
		<h2>{{ Auth::user()->username }}'s questions</h2>
		<div class="row">
			<div class="col-xs-12 col-md-12 form-group">
				<a href="/ask"><button class="btn btn-primary pull-right">Post a question</button></a>
			</div>
		</div>
		<p>You haven't asked any questions yet...</p>
	</div>
</div>
@stop