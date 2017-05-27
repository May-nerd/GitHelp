@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        {{-- <div class="col-md-8 col-md-offset-2"> --}}
            <div class="panel panel-default">
    
                <div class="panel-body">
                    {{-- <div class='btn-group main-tags'>
                        <button id='math' class='btn btn-danger'>MATH</button>
                        <button id='mapeh' class='btn btn-warning'>MAPEH</button>
                        <button id='science' class='btn btn-success'>SCIENCE</button>
                        <button id='language' class='btn btn-primary'>LANGUAGE</button>
                        <button id='programming' class='btn btn-secondary'>PROGRAMMING</button>
                    </div> --}}

                    <a href="/home" class="btn btn-primary"> <span class="glyphicon glyphicon-arrow-left"></span> Back to tags</a>

                    <h1 class="text-center"><span class="text-primary">{{ ucfirst($maincategory) }}</span> lessons with <span class="text-danger">{{ ucfirst($tagname) }}</span> tag.</h1>
                        <div id='lessons-list'>
                            @forelse($lessons as $lesson)
                            <div class="lesson">
                                <div class="result">
                                    <p class="result-title"> {{ $lesson->title }} </p>
                                    <p class="result-author"> {{ $lesson->name }} </p>
                                    <p class="result-date">{{ $lesson->created_at }}</p>
                                    <a href="#" class="btn btn-primary view-button">View Lesson</a>
                                </div>
                            </div>
                            @empty
                                <h1>No lessons found.</h1>
                            @endforelse
                        </div>

                
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
    <script src="{{ asset('js/lessonlist.js') }}"></script>
@endpush
