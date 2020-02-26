@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('placeStoreA') }}" class="form" enctype="multipart/form-data">
		@csrf
		<input type="hidden" name="id" value="{{ $place->id }}" placeholder="Name">
		<div class="row">
			<div class="col"><h2>Edit Place</h2></div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Name: </label>
			</div>
			<div class="col">
				<input type="text" name="name" value="{{ $place->name }}" placeholder="Name">
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="time-event">Open Time: </label>
			</div>
			<div class="col">
				<input type="time" id="time-event" value="{{ $place->open }}" name="open">
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="time-event">Close Time: </label>
			</div>
			<div class="col">
				<input type="time" id="time-event" value="{{ $place->close }}" name="close">
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Address: </label>
			</div>
			<div class="col">
				<input type="text" name="address" value="{{ $place->address }}" placeholder="Address">
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Number of reviews: </label>
			</div>
			<div class="col">
				<input type="text" name="review_count" value="{{ $place->review_count }}">
			</div>
		</div>
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Review Score: </label>
			</div>
			<div class="col">
				<input type="text" name="review_score" value="{{ $place->review_score }}">
			</div>
		</div>
		<img src="{{ asset('storage/places/'.$place->image) }}" alt="" title="">
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
				<label for="date-event">Subcategory: </label>
			</div>
			<div class="col">
				<select name="subcategory_id">
					<option value="0">None</option>
					@foreach($subcategories as $subcategory)
						@if($subcategory->id == $place->subcategory_id)
							<option value="{{ $subcategory->id }}" selected>{{ $subcategory->name }}</option>
						@else
							<option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
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
						@if($city->id == $place->city_id)
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