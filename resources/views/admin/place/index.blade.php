@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>Events</h2>
	<div class="add_contact">
		<a href="{{ route('placeCreateA') }}">Add</a>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Subcategory</th>
				<th scope="col">City</th>
				<th scope="col">Open</th>
				<th scope="col">Close</th>
				<th scope="col">Review Count</th>
				<th scope="col">Review Score</th>
				<th scope="col">Created</th>
				<th scope="col">Updated</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($places as $place)
				<tr>
					<td>{{ $place->id }}</td>
					<td>{{ $place->name }}</td>
					<td>{{ $place['subcategory_name']->name }}</td>
					<td>{{ $place['city_name']->name }}</td>
					<td>{{ $place->open }}</td>
					<td>{{ $place->close }}</td>
					<td>{{ $place->review_count }}</td>
					<td>{{ $place->review_score }}</td>
					<td>{{ $place->created_at }}</td>
					<td>{{ $place->updated_at }}</td>
					<td>
						<a href="{{ route('placeViewA', ['id' => $place->id]) }}">View</a>
						<a href="{{ route('placeEditA', ['id' => $place->id]) }}">Edit</a>
						<a href="{{ route('placeDeleteA', ['id' => $place->id]) }}">Delete</a>				
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection