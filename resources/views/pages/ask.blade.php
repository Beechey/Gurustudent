@extends('partials.layout')

@section('title', 'gurustudent | Ask a question')

@section('content')
<h1>Ask a question</h1>
<hr />
	<div class="col-md-8 form-group">
		<form id="ask" role="form" method="POST" action="{{ route('question.post') }}">
			{!! csrf_field() !!}

			<div class="row">
				<div class="col-lg-6 form-group{{ $errors->has('title') ? ' has-error' : '' }}">
					<input class="form-control" id="title" name="title" placeholder="Title..." type="text"autofocus="">
					@if($errors->has('title'))
						<span class="help-block">{{ $errors->first('title') }}</span>
					@endif
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 form-group{{ $errors->has('body') ? ' has-error' : '' }}">
					<textarea class="form-control" id="body" name="body" placeholder="What is your question, {{ Auth::user()->getName() }}?" rows="5"></textarea>
					@if($errors->has('body'))
						<span class="help-block">{{ $errors->first('body') }}</span>
					@endif	
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12 col-md-12 form-group">
					<button class="btn btn-primary pull-left" type="submit">Submit</button>
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