@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        {{-- <div class="col-md-8 col-md-offset-2"> --}}
            <div class="panel panel-default">

                <div class="panel-body">
                    <h1 class="text-center">Welcome, dear {{ Auth::user()->role }}!</h1>
                    @if(Auth::user()->role == 'teacher')
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
                    @elseif(Auth::user()->role == 'student')
                        <div class='btn-group main-tags'>
                            <button id='math' class='btn btn-danger'>MATH</button>
                            <button id='mapeh' class='btn btn-warning'>MAPEH</button>
                            <button id='science' class='btn btn-success'>SCIENCE</button>
                            <button id='language' class='btn btn-primary'>LANGUAGE</button>
                            <button id='programming' class='btn btn-secondary'>PROGRAMMING</button>
                        </div>
                        <div class='tag-page' id='tagsPage'></div>
                    @endif
                </div>
            </div>
       {{--  </div> --}}
    </div>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/student_home.css')}}">
@endpush


@push('scripts')
    <script src="{{ asset('js/student.js') }}"></script>
@endpush
