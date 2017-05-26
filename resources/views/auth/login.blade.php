@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 left-panel">
            <div>
                <img class="git-logo medium" src="{{asset('images/GitHelp_Logo.png')}}" alt="GitHelp Logo">
                <h2 class="text-center git">Git</h2>
            </div>
        </div>

        <div class="col-md-3 right-panel">
            <form class="form-horizontal login-form" role="form" method="POST" action="{{ route('login') }}" autocomplete="off">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id=" right-panelusername" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">
                                    Login
                                </button>

                                <!-- <div class="checkbox col-md-12">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                    <span> |</span>
                                    <label><a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?
                                    </a></label>
                                </div> -->
                            </div>

                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection


@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}"/>
@endpush

