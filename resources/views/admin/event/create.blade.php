@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('eventStoreA') }}" class="form" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col"><h2>Create Event</h2></div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Name: </label>
			</div>
			<div class="col">
				<input type="text" name="name" placeholder="Name">
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Date: </label>
			</div>
			<div class="col">
				<input type="date" id="date-event" name="date">
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="time-event">Time: </label>
			</div>
			<div class="col">
				<input type="time" id="time-event" name="time">
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Address: </label>
			</div>
			<div class="col">
				<input type="text" name="address" placeholder="Address">
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Number of reviews: </label>
			</div>
			<div class="col">
				<input type="text" name="review_count" value="0">
			</div>
		</div>
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
						<option value="{{ $type->id }}">{{ $type->name }}</option>
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
						<option value="{{ $city->id }}">{{ $city->name }}</option>
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