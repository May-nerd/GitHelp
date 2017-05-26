@extends('layouts.app')

@section('content')
 
        <div class="results-container">
            @if(isset($details))
                <h1 class="text-center result-banner">Search Results For: {{ $query }}</h1>

                @foreach($details as $result)
                    <div class="result">
                        <p class="result-title"> {{ $result->title }} </p>
                        <p class="result-author"> {{ $result->name }} </p>
                        <p class="result-date">{{ $result->created_at }}</p>
                        <a href="#" class="btn btn-primary view-button">View Lesson</a>
                    </div>
                @endforeach

            @else
                <p class="text-center">Keyword not found.</p>
            @endif
        </div>
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/search.css')}}">
@endpush

@push('scripts')
@endpush