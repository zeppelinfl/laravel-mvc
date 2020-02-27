@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('reviewStoreA', ['id' => $review->id]) }}" class="form">
		@csrf
		<input type="hidden" name="id" value="{{ $review->id }}">
		<div class="row">
			<div class="col"><h2>Edit review {{ $review->id }}</h2></div>
		</div>
		<div class="row">
			<textarea class="content-area" name="message">{{ $review->message }}</textarea>
		</div>
		<div class="row">
			<div class="col">
				<select name="user_id">
					<option value="0">None</option>
					@foreach($users as $user)

						@if($review->user_id == $user->id)
							<option selected value="{{ $user->id }}">{{ $user->email }}</option>
						@else
							<option value="{{ $user->id }}">{{ $user->email }}</option>
						@endif
					@endforeach
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Save"></div>
		</div>
	</form>
</div>
@endsection