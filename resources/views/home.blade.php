@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <div>
                        <h4>Your lessons</h4>
                        @forelse(Auth::user()->creates as $lesson)
                            <div>
                                {{ $lesson->title }}
                            </div>
                        @empty
                            WALA.
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
