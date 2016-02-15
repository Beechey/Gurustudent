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
    <div class="col-lg-6">
      <h3>{{ $user->getName() }}'s details</h3>
      <div class="col-lg-6">
        <ul>
          <li>Username: {{ $user->getName() }}</li>
          <li>Usergroup: Administrator</li>
          <li>Posts: {{ $user->getPostCount() }}</li>
        </ul>
      </div>
    </div>
    <div class="col-lg-6">
      <h3>{{ $user->getName() }}'s posts</h3>
      <table class="table table-bordered table-condensed table-striped">
        <thead>
          <th class="text-center"><h4>Title</h4></th>
          <th class="text-center"><h4>Answered</h4></th>
        </thead>
        {{-- <tbody>
          @foreach($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td><a href="#">{{$post->title}}</a></td>
          </tr>
          @endforeach
        </tbody> --}}
    </table>
    </div>
  </div>
  <div class="row">
    <hr />
    <div class="text-center">
      <p>&copy; gurustudent 2015, all rights reserved.</p>
    </div>
  </div>
@stop