@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('reviewStoreA') }}" class="form">
		@csrf
		<div class="row">
			<div class="col"><h2>Create Review</h2></div>
		</div>
		<div class="row">
			<textarea class="content-area" name="message" placeholder="Review Message"></textarea>
		</div>
		<div class="row">
			<div class="col">
				<select name="user_id">
					<option value="0">None</option>
					@foreach($users as $user)
						<option value="{{ $user->id }}">{{ $user->email }}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Create"></div>
		</div>
	</form>
</div>
@endsection