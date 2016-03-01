@extends('partials.layout')

@section('title', 'gurustudent')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>{{ $posts->title }}</h1>
        </div>
    </div>

    <hr />

    <ul class="media-list">
        <div class="row">
            <div class="col-lg-12">
                <p><i><a href="#">{{ $posts->author->getName() }}</a> asks...</i></p>    
            </div>
            <div class="col-lg-12">
                <div class="well">
                    {{ $posts->body }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p><i>Posted {{ $posts->created_at->diffForHumans() }}</i></p>
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

        <hr />

        @foreach($posts->replies as $reply)
            <div class="col-xs-11 pull-right">
                <li class="media">
                    <div class="media-body">
                        <p><i><a href="#">{{ $reply->author->getName() }}</a> replied with...</i></p>
                        <div class="well">
                            {{ $reply->body }}
                        </div>
                    </div>
                </li>
            </div>
        @endforeach
    </ul>
@stop