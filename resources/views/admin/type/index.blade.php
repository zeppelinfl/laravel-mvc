@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>Types</h2>
	<div class="add_contact">
		<a href="{{ route('typeCreateA') }}">Add</a>
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
			@foreach($types as $type)
				<tr>
					<td>{{ $type->id }}</td>
					<td>{{ $type->name }}</td>
					<td>{{ $type->created_at }}</td>
					<td>{{ $type->updated_at }}</td>
					<td>
						<a href="{{ route('typeEditA', ['id' => $type->id]) }}">Edit</a>
						<a href="{{ route('typeDeleteA', ['id' => $type->id]) }}">Delete</a>				
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection