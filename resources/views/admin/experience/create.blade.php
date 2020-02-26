@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('experienceStoreA') }}" class="form" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col"><h2>Create Experience</h2></div>
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
				<label for="date-event">Country: </label>
			</div>
			<div class="col">
				<select name="country_id">
					<option value="0">None</option>
					@foreach($countries as $country)
						<option value="{{ $country->id }}">{{ $country->name }}</option>
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