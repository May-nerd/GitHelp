@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1 class="text-center">Welcome, dear
                    @if(Auth::user()->role == 1)
                        student
                    @elseif(Auth::user()->role == 2)
                        teacher
                    @else
                        admin
                    @endif
                    !</h1>
                    @if(Auth::user()->role == 2)
                        <div>
                            <h2 class="text-center">Your lessons</h2>
                            @forelse(Auth::user()->creates as $lesson)
                                <div>
                                    {{ $lesson->title }}
                                </div>
                                <hr />
                            @empty
                                <h5>You don't have any lessons yet!</h5>
                            @endforelse
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
