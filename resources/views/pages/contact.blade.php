@extends('partials.layout')

@section('content')
<div class="row">
	<div class="col-md-6">
		<h1>Contact Us</h1>
		{{ Form::open() }}
	    
	    {{ Form::label('first_name', 'First Name') }}
	    {{ Form::text('first_name', 'First Name', array('id' => 'first_name')) }}

	</div>
	<div class="col-md-6">
		{{ Form::label('last_name', 'Last Name') }}
	    {{ Form::text('last_name', 'Last Name', array('id' => 'last_name')) }}

		{{ Form::close() }}
	</div>
</div>
@stop