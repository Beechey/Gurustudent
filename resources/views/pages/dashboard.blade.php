@extends('partials.layout')

@section('title', 'gurustudent | Dashboard ')

@section('content')
<h1>Dashboard</h1>
<hr />
<div class="row">
	<div class="text-center">
		<div class="row">
			<div class="col-xs-12 col-md-12 form-group">
				<a href="/ask"><button class="btn btn-primary pull-right">Post a question</button></a>
			</div>
		</div>
		<div class="row">
			@if(!$posts->count())
				<p>You haven't asked any questions, yet...</p>
			@else
                <div class="col-lg-10-offset-1">
                    <table class="table table-bordered table-condensed table-striped">
                        <thead>
                            <th class="text-center"><h4>Thread ID</h4></th>
                            <th class="text-center"><h4>Title</h4></th>
                            <th class="text-center"><h4>Created at</h4></th>
                            <th class="text-center"><h4>Actions</h4></th>
                        </thead>
                        <tbody>
            				@foreach($posts as $post)
            					<tr>
                                    <td>{{$post->id}}</td>
                                    <td><a href="#">{{$post->title}}</a></td>
                                    <td>{{$post->created_at->diffForHumans()}}</td>
                                    <td>No actions available</td>
                                </tr>
            				@endforeach
                        </tbody>
                    </table>
                </div>
			@endif
		</div>
	</div>
</div>
@stop