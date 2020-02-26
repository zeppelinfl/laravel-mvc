@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>Subcategories</h2>
	<div class="add_contact">
		<a href="{{ route('subcategoryCreateA') }}">Add</a>
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
			@foreach($subcategories as $subcategory)
				<tr>
					<td>{{ $subcategory->id }}</td>
					<td>{{ $subcategory->name }}</td>
					<td>{{ $subcategory->created_at }}</td>
					<td>{{ $subcategory->updated_at }}</td>
					<td>
						<a href="{{ route('subcategoryViewA', ['id' => $subcategory->id]) }}">View</a>
						<a href="{{ route('subcategoryEditA', ['id' => $subcategory->id]) }}">Edit</a>
						<a href="{{ route('subcategoryDeleteA', ['id' => $subcategory->id]) }}">Delete</a>				
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection