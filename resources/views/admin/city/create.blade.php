@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('cityStoreA') }}" class="form">
		@csrf
		<div class="row">
			<div class="col"><h2>Create City</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="name" placeholder="Name"></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="listings" placeholder="Listings"></div>
		</div>
		<div class="row">
			<div class="col">
				<select name="country_id">
					<option value="0">None</option>
					@foreach($countries as $country)
						<option value="{{ $country->id }}">{{ $country->name }}</option>
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