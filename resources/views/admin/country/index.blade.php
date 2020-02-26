@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>Countries</h2>
	<div class="add_contact">
		<a href="{{ route('countryCreateA') }}">Add</a>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Created</th>
				<th scope="col">Updated</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($countries as $country)
				<tr>
					<td>{{ $country->id }}</td>
					<td>{{ $country->name }}</td>
					<td>{{ $country->created_at }}</td>
					<td>{{ $country->updated_at }}</td>
					<td>
						<a href="{{ route('countryViewA', ['id' => $country->id]) }}">View</a>
						<a href="{{ route('countryEditA', ['id' => $country->id]) }}">Edit</a>
						<a href="{{ route('countryDeleteA', ['id' => $country->id]) }}">Delete</a>				
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection