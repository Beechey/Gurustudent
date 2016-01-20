@extends('partials.layout')

@section('title', 'gurustudent | Ask a question')

@section('content')
<h1>Ask a question</h1>
<hr />
<div class="row">
	<div class="col-md-8 form-group">
		<form id="contact" method="post" class="form" role="form">
			<div class="row">
				<div class="col-xs-6 col-md-6 form-group">
					<input class="form-control" id="title" name="title" placeholder="Title..." type="text"autofocus="">
				</div>
				<div class="col-xs-6 col-md-6 form-group">
					<input class="form-control" id="tag" name="tag" placeholder="Tags..." type="text"autofocus="">
				</div>
			</div>
			<textarea class="form-control" id="body" name="body" placeholder="Question..." rows="5"></textarea>
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