@extends('partials.layout')

@section('title', 'gurustudent')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>{{ $posts->title }}</h1>
        </div>
    </div>

    <hr />

    <div class="media post-media">
        <a class="pull-left" href="/user/{{ $posts->author->getName() }}">
            <img class="media-object" alt="{{ $posts->author->getName() }}" src="{{ $posts->author->getAvatarURL() }}">
        </a>
        <div class="media-body">
            <h4 class="media-heading"><a href="/user/{{ $posts->author->getName() }}">{{ $posts->author->getName() }}</a> asks...</h4>
            <p>{{ $posts->body }}</p>
            <p><i>Asked {{ $posts->created_at->diffForHumans() }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <ul class="list-inline">
                <li>
                    @can('edit_post')
                        <a href="#">
                            <button type="button" class="btn btn-primary btn-xs">
                                <span class="glyphicon glyphicon-edit"></span> Edit
                            </button>
                        </a>
                    @endcan
                </li>
                <li>
                    @can('ban_user')
                        <a href="#">
                            <button type="button" class="btn btn-primary btn-xs">
                                <span class="glyphicon glyphicon-thumbs-down"></span> Ban
                            </button>
                        </a>
                    @endcan
                </li>
            </ul>
        </div>
    </div>
    
    <hr />

    <div class="col-lg-12">
        <form role="form" action="{{ route('question.reply',  ['id' => $posts->id]) }}" method="post">
            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has("reply") ? ' has-error' : '' }}">
                <textarea name="reply" class="form-control" row="2" placeholder="Answer this question, {{ Auth::user()->getName() }}"></textarea>

                @if ($errors->has("reply"))
                    <span class="help-block">{{ $errors->first("reply") }}</span>
                @endif

                <br />

                <input type="submit" value="Post" class="btn btn-primary">
            </div>
        </form>
    </div>

    <div class="col-lg-12">
        <hr />
    </div>

    @foreach($posts->replies as $reply)
        <div class="col-xs-11 pull-right">
            <div class="media reply-media">
                <a class="pull-left" href="/user/{{ $reply->author->getName() }}">
                    <img class="media-object" alt="{{ $reply->author->getName() }}" src="{{ $reply->author->getAvatarURL() }}">
                </a>
                
                <div class="media-body">
                    <h5 class="media-heading"><a href="/user/{{ $reply->author->getName() }}">{{ $reply->author->getName() }}</a></h5> 
                    <p>{{ $reply->body }}</p>
                    <h6>Posted {{ $reply->created_at->diffForHumans() }}</h6>

                    <br />

                    <ul class="list-inline">
                        @if ($reply->author->id !== Auth::user()->id)
                            <li>
                                <a href="{{ route('question.like', ['id' => $reply->id]) }}">
                                    <button type="button" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-thumbs-up"></span> {{ $reply->likes->count() }}
                                    </button>
                                </a>
                            </li>
                        @endif
                        @if (Auth::user())
                            <li>
                                {{ $reply->likes->count() }} like(s)
                            </li>
                        @endif
                        @if ($posts->author->id == Auth::user()->id)
                            <li>
                                <a href="#">
                                    <button type="button" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-ok-circle"></span>
                                    </button>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-lg-12">
            <hr />
            <div class="text-center">
                <p>&copy; gurustudent 2015, all rights reserved.</p>
            </div>
        </div>
    </div>
@stop