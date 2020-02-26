@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>View Experience: {{ $experience->id }}</h2>
	<div class="row row-view">
		<div class="col col-3">Image</div>
	</div>
	<div class="row row-view">
		<img src="{{ asset('storage/experiences/'.$experience->image) }}" alt="" title="">
	</div>
	<div class="row row-view">
		<div class="col col-3">City</div>
		<div class="col col-2 bold">
			@foreach($countries as $country)
				@if($experience->country_id == $country->id)
					{{ $country->name }}
				@endif
			@endforeach
		</div>
	</div>
</div>
@endsection