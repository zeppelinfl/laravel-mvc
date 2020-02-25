@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('categoryStoreA') }}" class="form">
		@csrf
		<div class="row">
			<div class="col"><h2>Create Category</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="name" placeholder="Name"></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="location_number" placeholder="Number of locations"></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="awesome_sign" placeholder="Font-Awesome Sign name eg:'fa-search'"></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Create"></div>
		</div>
	</form>
</div>
@endsection