@extends('partials.layout')

@section('title', 'gurustudent')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>{{ $posts->title }}</h1>
      </div>
    </div>

    <hr />

    <div class="row">
        <div class="col-lg-12">
            <p><i><a href="/user/Matt">Matt</a> asks...</i></p>    
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
@stop