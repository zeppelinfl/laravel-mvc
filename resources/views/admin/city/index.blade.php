@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>Cities</h2>
	<div class="add_contact">
		<a href="{{ route('cityCreateA') }}">Add</a>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Country</th>
				<th scope="col">Created</th>
				<th scope="col">Updated</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cities as $city)
				<tr>
					<td>{{ $city->id }}</td>
					<td>{{ $city->name }}</td>
					<td>{{ $city->country_name }}</td>
					<td>{{ $city->created_at }}</td>
					<td>{{ $city->updated_at }}</td>
					<td>
						<a href="{{ route('cityViewA', ['id' => $city->id]) }}">View</a>
						<a href="{{ route('cityEditA', ['id' => $city->id]) }}">Edit</a>
						<a href="{{ route('cityDeleteA', ['id' => $city->id]) }}">Delete</a>				
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection