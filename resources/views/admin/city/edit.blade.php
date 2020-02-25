@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('cityStoreA', ['id' => $city->id]) }}" class="form">
		@csrf
		<input type="hidden" name="id" value="{{ $city->id }}">
		<div class="row">
			<div class="col"><h2>Edit city {{ $city->id }}</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="name" value="{{ $city->name }}" placeholder="Name"></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" value="{{ $city->listings }}" name="listings" placeholder="Listings"></div>
		</div>
		<div class="row">
			<div class="col">
				<select name="country_id">
					<option value="0">None</option>
					@foreach($countries as $country)

						@if($city->country_id == $country->id)
							<option selected value="{{ $country->id }}">{{ $country->name }}</option>
						@else
							<option value="{{ $country->id }}">{{ $country->name }}</option>
						@endif
					@endforeach
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Create"></div>
		</div>
	</form>
</div>
@endsection