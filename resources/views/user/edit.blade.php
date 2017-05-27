@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row col-xs-8 col-xs-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Edit Profile</h4>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" action="/profile/{{ Auth::user()->username }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <!-- <input type="hidden" name="_method" type="PUT" /> -->
                    <input type="hidden" name="role" value="{{ $user->role }}" />
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" autofocus />
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="username" class="col-md-4 control-label">Username</label>
                        <div class="col-md-6">
                            <input id="username" type="username" class="form-control" name="username" value="{{ $user->username }}" />
                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-mail</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" />
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">New Password</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" />
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <input class="btn btn-primary" type="submit" name="submit" value="Save Changes" />
                        </div>
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>
@endsection