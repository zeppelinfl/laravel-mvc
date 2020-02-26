@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>View Category: {{ $category->name }}</h2>
	<div class="row row-view">
		<div class="col col-3">Name</div>
		<div class="col col-2 bold">{{ $category->name }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Location Number</div>
		<div class="col col-2">{{ $category->location_number }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Font Awesome sign name</div>
		<div class="col col-2">{{ $category->awesome_sign }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Created</div>
		<div class="col col-2">{{ $category->created_at }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Updated</div>
		<div class="col col-2">{{ $category->updated_at }}</div>
	</div>
</div>
@endsection