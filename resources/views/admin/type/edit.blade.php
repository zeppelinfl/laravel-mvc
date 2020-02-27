@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('typeStoreA', ['id' => $type->id]) }}" class="form">
		@csrf
		<input type="hidden" name="id" value="{{ $type->id }}">
		<div class="row">
			<div class="col"><h2>Edit type {{ $type->id }}</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="name" value="{{ $type->name }}" placeholder="Name"></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Save"></div>
		</div>
	</form>
</div>
@endsection