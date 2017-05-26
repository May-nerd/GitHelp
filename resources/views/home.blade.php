@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1 class="text-center">Welcome, dear {{ Auth::user()->role }}!</h1>
                    @if(Auth::user()->role == 'teacher')
                        <div>
                            <h2 class="text-center">Your lessons</h2>
                            @forelse(Auth::user()->creates as $lesson)
                                <div>
                                    <form class="form-delete" action="/lessons/{{$lesson->id}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        {{ $lesson->title }}
                                        <input type="submit" name="delete" value="&times;" id="delete" class="btn btn-danger" />
                                    </form>
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
