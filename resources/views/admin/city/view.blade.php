@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>View City: {{ $city->name }}</h2>
	<div class="row row-view">
		<div class="col col-3">Name</div>
		<div class="col col-2 bold">{{ $city->name }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Country</div>
		<div class="col col-2 bold">
			@foreach($countries as $country)
				@if($city->country_id == $country->id)
					{{ $country->name }}
				@endif
			@endforeach
		</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Created</div>
		<div class="col col-2">{{ $city->created_at }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Updated</div>
		<div class="col col-2">{{ $city->updated_at }}</div>
	</div>
</div>
@endsection