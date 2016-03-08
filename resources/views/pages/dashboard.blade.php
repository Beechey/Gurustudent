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
                    <table class="table table-striped table-responsive">
                        <caption>Your threads</caption>
                        <thead>
                            <tr>
                                <th class="text-center"><h4>Title</h4></th>
                                <th class="text-center"><h4>Created at</h4></th>
                                <th class="text-center"><h4>Actions</h4></th>
                            </tr>
                        </thead>
                        <tbody>
            				@foreach($posts as $post)
            					<tr>
                                    <td><a href="{{ route('post.show', ['id' => $post->id]) }}">{{ $post->title }}</a></td>
                                    <td>{{ $post->created_at->diffForHumans() }}</td>
                                    <td>
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#">
                                                    <button type="button" class="btn btn-primary btn-xs">
                                                        <span class="glyphicon glyphicon-remove-circle"></span> Close
                                                    </button>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('post.delete', ['id' => $post->id]) }}">
                                                    <button type="button" class="btn btn-primary btn-xs">
                                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                                    </button>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
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