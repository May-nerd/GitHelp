@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row col-xs-8 col-xs-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
                <h4>Account</h4>
                
                 @if($user->role == 'teacher')
                
                    @if ($isSubscribed)
                    <a href="{{ url('/profile/' . $user->username . '/subscribes') }}" class="btn btn-default">
                    Subscribe
                    </a>
                    @else
                    <a href="{{ url('/profile/' . $user->username . '/unsubscribes') }}" class="btn btn-default">
                    Unsubscribe
                    </a>
                    @endif
                @endif
                
                 @if(Auth::id() === $user->id)
                        <a class="btn btn-info btn-sm" href="{{ url('/notification/')}}"><span class="glyphicon glyphicon-bell"></span>Notifications</a>
			     @endif
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
