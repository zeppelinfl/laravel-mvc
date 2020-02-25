@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('countryStoreA', ['id' => $country->id]) }}" class="form">
		@csrf
		<input type="hidden" name="id" value="{{ $country->id }}">
		<div class="row">
			<div class="col"><h2>Edit country {{ $country->id }}</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="name" value="{{ $country->name }}" placeholder="Name"></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Create"></div>
		</div>
	</form>
</div>
@endsection