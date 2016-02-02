@extends('partials.layout')

@section('title', 'gurustudent | profile')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      @include('partials.user.userblock')
      <hr />
    </div>
  </div>
  <div class="row">
    <hr />
    <div class="text-center">
      <p>&copy; gurustudent 2015, all rights reserved.</p>
    </div>
  </div>
@stop