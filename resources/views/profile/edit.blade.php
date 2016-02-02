@extends('partials.layout')

@section('title', 'gurustudent | edit account')

@section('content')
  <h1>Edit your account details</h1>
  <hr />

  <div class="row">
    <div class="col-lg-6">
      <form class="form-vertical" role="form" method="post" action="{{ route('profile.edit') }}">
        {!! csrf_field() !!}

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
              <label for="username" class="control-label">Username</label>
              <input type="text" name="username" class="form-control" id="username" value="">
              @if($errors->has('username'))
                <span class="help-block">{{ $errors->first('username') }}</span>
              @endif
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
              <label for="title" class="control-label">Title</label>
              <input type="text" name="title" class="form-control" id="title" value="">
              @if($errors->has('title'))
                <span class="help-block">{{ $errors->first('title') }}</span>
              @endif
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="control-label">Email</label>
              <input type="email" name="email" class="form-control" id="email" value="">
              @if($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
              @endif
            </div>
          </div>
        </div>

        <br />

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update details</button>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <hr />
    <div class="text-center">
      <p>&copy; gurustudent 2015, all rights reserved.</p>
    </div>
  </div>
@stop