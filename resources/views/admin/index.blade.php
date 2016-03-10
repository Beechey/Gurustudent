@extends('partials.layout')

@section('title', 'gurustudent | Admin Control Panel')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<ul class="list-inline">
			<li class="pull left">
				<h1 class="pull-left">Administrator Control Panel</h1>
				<p><i>Only Owners and Administrators can view this page.</i></p>
			</li>
		</ul>

		<hr />
		<div class="col-lg-2">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="#">Blogs</a></li>
				<li><a href="#">Communities</a></li>
			    <li><a href="#">Tags</a></li>
			    <li><a href="#">User Groups</a></li>
			    <li><a href="{{ route('admin.users') }}">Users</a></li>
			</ul>
		</div>
		<div class="col-lg-10">
			<h3>Most recent posts</h3>


		</div>
	</div>
</div>
@stop