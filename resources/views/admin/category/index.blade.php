@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>Categories</h2>
	<div class="add_contact">
		<a href="{{ route('categoryCreateA') }}">Add</a>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Number of Locations</th>
				<th scope="col">FA Sign name</th>
				<th scope="col">Created</th>
				<th scope="col">Updated</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
					<td>{{ $category->location_number }}</td>
					<td>{{ $category->awesome_sign }}</td>
					<td>{{ $category->created_at }}</td>
					<td>{{ $category->updated_at }}</td>
					<td>
						<a href="{{ route('categoryViewA', ['id' => $category->id]) }}">View</a>
						<a href="{{ route('categoryEditA', ['id' => $category->id]) }}">Edit</a>
						<a href="{{ route('categoryDeleteA', ['id' => $category->id]) }}">Delete</a>				
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection