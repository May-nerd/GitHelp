@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row col-xs-8 col-xs-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Lessons Read</h4>
			</div>
			<div class="panel-body">
				@forelse($user->reads as $read)
					{{ $read->title }} by <a href="/profile/{{ $read->createdBy->username }}">{{ $read->createdBy->name }}</a>
					<hr />
				@empty
					<h4>You have not read any lessons yet!</h4>
				@endforelse
			</div>
		</div>
	</div>
</div>
@endsection