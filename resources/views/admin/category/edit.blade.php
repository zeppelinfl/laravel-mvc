@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('categoryStoreA', ['id' => $category->id]) }}" class="form">
		@csrf
		<input type="hidden" name="id" value="{{ $category->id }}">
		<div class="row">
			<div class="col"><h2>Edit category {{ $category->id }}</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="name" value="{{ $category->name }}" placeholder="Name"></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="location_number" value="{{ $category->location_number }}" placeholder="Number of locations"></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="awesome_sign" value="{{ $category->awesome_sign }}" placeholder="Font-Awesome Sign name eg:'fa-search'"></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Save"></div>
		</div>
	</form>
</div>
@endsection