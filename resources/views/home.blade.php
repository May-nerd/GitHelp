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

                                    <button class="btn btn-danger" data-toggle="modal" data-target="#deleteLesson"><span class="glyphicon glyphicon-trash">&nbsp;</span> Delete</button>
                                </div>
                                <hr />
                            <div class="modal fade" id="deleteLesson" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="text-center">
                                              <h4>Are you sure you want to delete this lesson?</h4>
                                              

                                                <form action="/lessons/{{$lesson->id}}" method="post">
                                                    {{ csrf_field() }}
                                                    {{method_field('DELETE')}}

                                                
                                                    <input type="submit" class="btn btn-danger" value="Delete"/>
                                                    <input type="button" class="btn btn-default" value="No" data-dismiss="modal">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
