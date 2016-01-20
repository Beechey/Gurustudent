@extends('partials.layout')

@section('title', 'gurustudent')

@section('content')
@if (!Auth::user())
<div class="row">
	<div class="jumbotron col-xs-12 col-md-12">
		<h1>gurustudent.</h1>
		<p>This website offers students the capability to ask and answer questions with their peers.</p>
		<a href="/register"><btn class="btn btn-primary">Create an account</btn></a>
	</div>
</div>
<div class="row">
	<div class="col-xs-4 col-md-4">
		<h3>Asking questions</h3>
		<p>Press <a href="/ask">here</a> to ask a question to your peers. We allow your to target your question to those that are best able to answer them.</p>
	</div>
	<div class="col-xs-4 col-md-4">
		<h3>Answering questions</h3>
		<p>We allow users to ask questions to their peers, this means that you are able to solve issues and help others solve issues for on-site experience.</p>
	</div>
	<div class="col-xs-4 col-md-4">
		<h3>Social networking</h3>
		<p>This service also has social media aspects, such as:-</p>
		<ul>
			<li>Adding friends</li>
			<li>Private messaging</li>
			<li>Obtaning XP for answering and asking questions</li>
		</ul>
	</div>
</div>
@else
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
	@endif
	<div class="row">
		<hr />
		<div class="text-center">
			<p>&copy; gurustudent 2015, all rights reserved.</p>
		</div>
	</div>
	@stop