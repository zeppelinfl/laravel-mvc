@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>View Place: {{ $place->name }}</h2>
	<div class="row row-view">
		<div class="col col-3">Name</div>
		<div class="col col-2 bold">{{ $place->name }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Open</div>
		<div class="col col-2 bold">{{ $place->open }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Close</div>
		<div class="col col-2 bold">{{ $place->close }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Address</div>
		<div class="col col-2 bold">{{ $place->address }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Number of Reviews</div>
		<div class="col col-2 bold">{{ $place->review_count }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Review Score</div>
		<div class="col col-2 bold">{{ $place->review_score }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Image</div>
	</div>
	<div class="row row-view">
		<img src="{{ asset('storage/places/'.$place->image) }}" alt="" title="">
	</div>
	<div class="row row-view">
		<div class="col col-3">Subcategory</div>
		<div class="col col-2 bold">
			@foreach($subcategories as $subcategory)
				@if($place->subcategory_id == $subcategory->id)
					{{ $subcategory->name }}
				@endif
			@endforeach
		</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">City</div>
		<div class="col col-2 bold">
			@foreach($cities as $city)
				@if($place->city_id == $city->id)
					{{ $city->name }}
				@endif
			@endforeach
		</div>
	</div>
</div>
@endsection