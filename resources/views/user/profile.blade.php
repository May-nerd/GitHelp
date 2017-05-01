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
					<div>
						<h4>{{ $read->title }}</h4> By <span>{{ $read->createdBy->name }}</span>
					</div>
				@empty
					WALA.
				@endforelse
			</div>
		</div>
	</div>
</div>
@endsection