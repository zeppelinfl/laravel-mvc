@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>View Subcategory: {{ $subcategory->name }}</h2>
	<div class="row row-view">
		<div class="col col-3">Name</div>
		<div class="col col-2 bold">{{ $subcategory->name }}</div>
	</div>
</div>
@endsection