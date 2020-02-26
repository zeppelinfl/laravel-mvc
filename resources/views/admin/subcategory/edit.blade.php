@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('subcategoryStoreA', ['id' => $subcategory->id]) }}" class="form">
		@csrf
		<input type="hidden" name="id" value="{{ $subcategory->id }}">
		<div class="row">
			<div class="col"><h2>Edit subcategory {{ $subcategory->id }}</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="name" value="{{ $subcategory->name }}" placeholder="Name"></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Create"></div>
		</div>
	</form>
</div>
@endsection