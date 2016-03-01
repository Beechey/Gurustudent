@extends('partials.layout')

@section('title', 'gurustudent')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>{{ $posts->title }}</h1>
        </div>
    </div>

    <hr />

    <div class="media">
        <a class="pull-left" href="/user/{{ $posts->author->getName() }}">
            <img class="media-object" alt="{{ $posts->author->getName() }}" src="{{ $posts->author->getAvatarURL() }}">
        </a>
        <div class="media-body">
            <h4 class="media-heading"><a href="/user/{{ $posts->author->getName() }}">{{ $posts->author->getName() }}</a> asks...</h4>
            <p>{{ $posts->body }}</p>
            <p><i>Asked {{ $posts->created_at->diffForHumans() }}</p>
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
            <hr />
            <div class="media">
                <a class="pull-left" href="/user/{{ $reply->author->getName() }}">
                    <img class="media-object" alt="{{ $reply->author->getName() }}" src="{{ $reply->author->getAvatarURL() }}">
                </a>
                <div class="media-body">
                    <h6 class="media-heading"><a href="/user/{{ $reply->author->getName() }}">{{ $reply->author->getName() }}</a> answered...</h4>
                    <p>{{ $reply->body }}</p>
                    <button type="button" class="btn btn-primary btn-xs">Like</button>
                </div>
            </div>
            <hr />
            <br />
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