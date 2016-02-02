@extends('partials.layout')

@section('title', 'gurustudent')

@section('content')
@if (!Auth::user())
	<div class="container-full">
      <div class="row">
        <div class="col-lg-12 text-center v-center">
          <h1><b>Guru</b>student</h1>
          <p class="lead">Please sign up to use all of the website functions.</p>
        </div>
 
      </div> <!-- /row -->
  
  	<br><br><br><br><br>

</div> <!-- /container full -->

<div class="container">  
  	<hr>
  	<div class="row">
        <div class="col-md-4">
        	<div class="panel panel-default">
            	<div class="panel-heading"><h3>Asking questions</h3></div>
            	<div class="panel-body">Press <a href="/ask">here</a> to ask a question to your peers. We allow your to target your question to those that are best able to answer them.
            	</div>
          	</div>
        </div>
      	<div class="col-md-4">
        	<div class="panel panel-default">
            	<div class="panel-heading"><h3>Answering questions</h3></div>
            	<div class="panel-body">We allow users to ask questions to their peers, this means that you are able to solve issues and help others solve issues for on-site experience.            
            	</div>
          	</div>
        </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Social networking</h3></div>
            	<div class="panel-body">
            		This service also has social media aspects, such as:
      					<ul>
      						<li>Adding friends</li>
      						<li>Private messaging</li>
      						<li>Obtaning XP for answering and asking questions</li>
      					</ul>
            	</div>
          	</div>
        </div>
    </div>
</div>

@else
	@include('pages.dashboard')
@endif
	<div class="row">
		<hr />
		<div class="text-center">
			<p>&copy; gurustudent 2015, all rights reserved.</p>
		</div>
	</div>
@stop