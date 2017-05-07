@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row col-xs-8 col-xs-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Account</h4>
			</div>
			
			<div class="panel-heading">
				<h4>Lessons Read</h4>
			</div>
			<div class="panel-body">
				@forelse($lessons as $lesson)
					{{ $lesson->title }} by <a href="/profile/{{ $lesson->createdBy->username }}">{{ $lesson->createdBy->name }}</a>
					<p class="small">Total pages: <span class="badge">{{ $lesson->pages->count() }}</span></p>
					<hr />
				@empty
					<h4>You have not read any lessons yet!</h4>
				@endforelse
			</div>
		</div>
	</div>
</div>
@endsection