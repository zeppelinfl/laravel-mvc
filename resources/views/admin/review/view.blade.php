@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>View Review #{{ $review->id }}</h2>
	<div class="row row-view">
		<div class="col col-3">Message</div>
	</div>
	<div class="row row-view">
		<div class="col bold">{{ $review->message }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">User</div>
		<div class="col col-2 bold">
			@foreach($users as $user)
				@if($review->user_id == $user->id)
					{{ $user->email }}
				@endif
			@endforeach
		</div>
	</div>
</div>
@endsection