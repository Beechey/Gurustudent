@extends('partials.layout')

@section('title', 'gurustudent | Dashboard ')

@section('content')
<ul class="nav nav-tabs">
    <li><a href="/">Your questions</a></li>
    <li><a href="{{ route('show.all') }}">All questions</a></li>
</ul>

<br />

<div class="row">
	<ul class="list-inline">
		<li class="pull left">
			<h1 class="pull-left">All questions</h1>
		</li>
		<li class="pull-right">
			<a href="/ask"><button class="btn btn-primary btn-sm pull-right">Post a question</button></a>
		</li>
	</ul>
</div>

<hr />

<div class="row">
	<div class="text-center">
		<div class="row">
			@if(!$posts->count())
				<p>You haven't asked any questions, yet...</p>
			@else
                <div class="col-lg-10-offset-1">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th class="text-center"><h4>Title</h4></th>
                                <th class="text-center"><h4>Created at</h4></th>
                                <th class="text-center"><h4>Posted by</h4></th>
                                <th class="text-center"><h4>Actions</h4></th>
                            </tr>
                        </thead>
                        <tbody>
            				@foreach($posts as $post)
            					<tr>
                                    <td><a href="{{ route('post.show', ['id' => $post->id]) }}">{{ $post->title }}</a></td>
                                    <td>{{ $post->created_at->diffForHumans() }}</td>
                                    <td><a href="/user/{{ $post->author->getName() }}">{{ $post->author->getName() }}</a></td>
                                    <td>
                                        <ul class="list-inline">
                                        	@if ($post->user_id == Auth::user()->id)
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
	                                    	@else
	                                    		@can ('close_post')
	                                    			<li>
		                                                <a href="#">
		                                                    <button type="button" class="btn btn-primary btn-xs">
		                                                        <span class="glyphicon glyphicon-remove-circle"></span> Close
		                                                    </button>
		                                                </a>
	                                            	</li>
	                                    		@endcan
	                                    		@can ('delete_post')
	                                    			<li>
		                                                <a href="{{ route('post.delete', ['id' => $post->id]) }}">
		                                                    <button type="button" class="btn btn-primary btn-xs">
		                                                        <span class="glyphicon glyphicon-trash"></span> Delete
		                                                    </button>
		                                                </a>
	                                            	</li>
	                                    		@endcan
	                                    	@endif
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