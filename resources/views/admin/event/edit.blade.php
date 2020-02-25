@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('eventStoreA') }}" class="form" enctype="multipart/form-data">
		@csrf
		<input type="hidden" name="id" value="{{ $event->id }}" placeholder="Name">
		<div class="row">
			<div class="col"><h2>Edit Event</h2></div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Name: </label>
			</div>
			<div class="col">
				<input type="text" name="name" value="{{ $event->name }}" placeholder="Name">
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Date: </label>
			</div>
			<div class="col">
				<input type="date" id="date-event" value="{{ $event->date }}" name="date">
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="time-event">Time: </label>
			</div>
			<div class="col">
				<input type="time" id="time-event" value="{{ $event->time }}" name="time">
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Address: </label>
			</div>
			<div class="col">
				<input type="text" name="address" value="{{ $event->address }}" placeholder="Address">
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Number of reviews: </label>
			</div>
			<div class="col">
				<input type="text" name="review_count" value="{{ $event->review_count }}">
			</div>
		</div>
		<img src="{{ asset('storage/'.$event->image) }}" alt="" title="">
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Add Image: </label>
			</div>
			<div class="col">
				<input type="file" name="image" placeholder="Select image">
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Type: </label>
			</div>
			<div class="col">
				<select name="type_id">
					<option value="0">None</option>
					@foreach($types as $type)
						@if($type->id == $event->type_id)
							<option value="{{ $type->id }}" selected>{{ $type->name }}</option>
						@else
							<option value="{{ $type->id }}">{{ $type->name }}</option>
						@endif
					@endforeach
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="date-event">City: </label>
			</div>
			<div class="col">
				<select name="city_id">
					<option value="0">None</option>
					@foreach($cities as $city)
						@if($city->id == $event->city_id)
							<option value="{{ $city->id }}" selected>{{ $city->name }}</option>
						@else
							<option value="{{ $city->id }}">{{ $city->name }}</option>
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