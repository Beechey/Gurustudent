@extends('partials.layout')

@section('title', 'gurustudent | Contact us')

@section('content')
<h1>Contact us</h1>
<hr />
<div class="row">
	<div class="col-md-8 form-group">
		<form id="contact" method="post" class="form" role="form">
			<div class="row">
				<div class="col-xs-6 col-md-6 form-group">
					<input class="form-control" id="Name" name="name" placeholder="Name..." type="text"autofocus="">
				</div>
				<div class="col-xs-6 col-md-6 form-group">
					<input class="form-control" id="Email" name="email" placeholder="Email..." type="text"autofocus="">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-12 form-group">
					<input class="form-control" id="Title" name="title" placeholder="Title..." type="text"autofocus="">
				</div>
			</div>
			<textarea class="form-control" id="message" name="msg" placeholder="Message..." rows="5"></textarea>
			<br>
			<div class="row">
				<div class="col-xs-12 col-md-12 form-group">
					<button class="btn btn-primary pull-right" type="submit">Submit</button>
				</div>
			</div>
		</form>
	</div>	
</div>
<div class="row">
	<hr />
	<div class="text-center">
		<p>&copy; gurustudent 2015, all rights reserved.</p>
	</div>
</div>
@stop