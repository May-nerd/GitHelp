@extends('layouts.app')

@section('content')

		<div class="panel panel-default text-center lessonsidebar">
			<div class="panel-heading">
				<h6>
					<span class="breadcrumbs">
						<a href="#">AP Calculus AB</a>
						<p>></p>
						<a href="#">Infinite Limits</a>
					</span>
				</h6>
				<h4>{{ $lesson->title }}</h4>
				<h6>Lesson by {{ $lesson->createdBy->name }}</h6>
				<input type="hidden" id="lesson_id" name="" value="{{ $lesson->id }}" >
				<input type="hidden" id="current_page" name="" value="1" >
			</div>
			<div class="panel-body lessonnav">
                @forelse($lesson->pages as $page)
					<a class="page_link" href="#" id="{{ $page->page_number }}">{{ $page->title }}</a>
				@empty
				@endforelse
			</div>
		</div>
		<div class="content">
			
            @if(count($lesson->pages))

            <h1 class="text-center" id="lesson_title">{{ $lesson->pages[0]->title }}</h1>
			<div class="well sampleimg">
				<h1 class="text-center">< PUT IMAGE / VIDEO IN THIS BOX ></h1>
			</div>

			<hr />
			<p id="lesson_content">
                {{ $lesson->pages[0]->content }}
			</p>
			@else
			<h1 class="text-center" id="lesson_title">No pages available</h1>
				<div class="well sampleimg">
					<h1 class="text-center">EMPTY</h1>
				</div>
			@endif
			
		</div>
@endsection

@push('styles')
    <link href="{{ asset('css/lesson.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/lesson.js') }}"></script>
@endpush
