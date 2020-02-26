@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>View Event: {{ $event->name }} </h2>
	<div class="row row-view">
		<div class="col col-3">Name</div>
		<div class="col col-2 bold">{{ $event->name }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Date</div>
		<div class="col col-2 bold">{{ $event->date }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Time</div>
		<div class="col col-2 bold">{{ $event->time }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Address</div>
		<div class="col col-2 bold">{{ $event->address }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Number of reviews</div>
		<div class="col col-2 bold">{{ $event->review_count }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Image</div>
	</div>
	<div class="row row-view">
		<img src="{{ asset('storage/'.$event->image) }}" alt="" title="">
	</div>
	<div class="row row-view">
		<div class="col col-3">Type</div>
		<div class="col col-2 bold">
			@foreach($types as $type)
				@if($event->type_id == $type->id)
					{{ $type->name }}
				@endif
			@endforeach
		</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">City</div>
		<div class="col col-2 bold">
			@foreach($cities as $city)
				@if($event->city_id == $city->id)
					{{ $city->name }}
				@endif
			@endforeach
		</div>
	</div>
</div>
@endsection