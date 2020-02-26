@extends('layouts.app')
@section('content')
	<div class="container white">
		@if($city != '') 
			@if($search != '') 
				<h2>Search Results in {{ $city->name }} - {{ $country->name }} using keyword '{{ $search }}'</h2>
			@else
				<h2>Search Results in {{ $city->name }} - {{ $country->name }}</h2>
			@endif
		@else
			@if($search != '') 
				<h2>Search Results using keyword '{{ $search }}'</h2>
			@else
				<h2>Search Results</h2>
			@endif
		@endif
	</div>
	@include('search.event', ['events' => $events])
@endsection