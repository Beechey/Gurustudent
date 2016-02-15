@extends('partials.layout')

@section('title', 'gurustudent | profile')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>{{ $posts->title }}</h1>
      </div>
    </div>

    <hr />

    <div class="row">
        <div class="col-lg-12">
            <div class="well">
                <p>{{ $posts->body }}</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <p><i>Posted by {{ $posts->user_id }}</i></p>
        </div>
        <div class="col-lg-6 pull-right">
            <p><i>Posted {{ $posts->created_at->diffForHumans() }}</i></p>
        </div>
    </div>
@stop