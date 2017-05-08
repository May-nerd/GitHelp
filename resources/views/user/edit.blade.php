@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row col-xs-8 col-xs-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Edit Profile</h4>
			</div>
			<div class="panel-body">

				<form class="form-horizontal" role="form" method="POST" action="/profile/{{ Auth::user()->username }}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <input type="hidden" name="_token" value="">
 					<input type="hidden" name="_method" value="PUT">

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
	            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

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
		          <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

    		      @if ($errors->has('username'))
                <span class="help-block">
                  <strong>{{ $errors->first('username') }}</strong>
                </span>
              @endif
        	  </div>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="new-password" class="col-md-4 control-label">New Password</label>
	            <div class="col-md-6">
  	            <input id="new-password" type="password" class="form-control" name="new-password" required>

                @if ($errors->has('new-password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('new-password') }}</strong>
                  </span>
                @endif
    		      </div>
          </div>

          <div class="form-group">
            <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

        	  <div class="col-md-6">
              <input id="new-password-confirm" type="password" class="form-control" name="password_confirmation" required>
          	</div>
          </div>

          <div class="form-group">
            <label for="current-password" class="col-md-4 control-label">Current Password</label>

            <div class="col-md-6">
              <input id="current-password" type="password" class="form-control" name="current-password" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
        	    <button type="submit" class="btn btn-primary">
                Save Changes
              </button>
  		      </div>
          </div>
        </form>
			</div>
		</div>
	</div>
</div>
@endsection