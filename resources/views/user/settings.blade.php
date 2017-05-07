@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row col-xs-8 col-xs-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Change Acoount Profile</h4>
			</div>
			<div class="panel-body">
				<form action="/profile/{{Auth::user()->username}}" method="post">
					{{csrf_field()}}
					{{method_field('PUT')}}
					<input type="hidden" name="id" value="{{ Auth::user()->id }}">
					<input type="hidden" name="role" value="{{ Auth::user()->role }}">
					<div class="form-goup">
						<label for="name">Name: </label>
						<input type="text" name="name" class="form-control" value="{{ $user->name }}">
					</div>
					<div class="form-goup">
						<label for="username">Username: </label>
						<input type="text" name="username" class="form-control" value="{{ $user->username }}">
					</div>
					<div class="form-goup">
						<label for="password">Password: </label>
						<input type="password" class="form-control" name="password" >
					</div>
					<div class="form-goup">
						<label for="email">Email: </label>
						<input type="email" name="email" class="form-control" value="{{ $user->email }}">
					</div>
					<div class="form-goup">
						<input type="submit" value="Update" class="btn btn-success pull-right">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection