@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('experienceStoreA') }}" class="form" enctype="multipart/form-data">
		@csrf
		<input type="hidden" name="id" value="{{ $experience->id }}" placeholder="Name">
		<div class="row">
			<div class="col"><h2>Edit Event</h2></div>
		</div>
		<img src="{{ asset('storage/experiences/'.$experience->image) }}" alt="" title="">
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
				<label for="date-event">Country: </label>
			</div>
			<div class="col">
				<select name="country_id">
					<option value="0">None</option>
					@foreach($countries as $country)
						@if($country->id == $experience->country_id)
							<option value="{{ $country->id }}" selected>{{ $country->name }}</option>
						@else
							<option value="{{ $country->id }}">{{ $country->name }}</option>
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