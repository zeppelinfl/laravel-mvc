@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>Contacts</h2>
	<div class="add_contact">
		<a href="{{ route('contactCreateA') }}">Add</a>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Created</th>
				<th scope="col">Updated</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($contacts as $contact)
				<tr>
					<td>{{ $contact->id }}</td>
					<td>{{ $contact->name }}</td>
					<td>{{ $contact->email }}</td>
					<td>{{ $contact->created_at }}</td>
					<td>{{ $contact->updated_at }}</td>
					<td>
						<a href="{{ route('contactEditA', ['id' => $contact->id]) }}">Edit</a>
						<a href="{{ route('contactDeleteA', ['id' => $contact->id]) }}">Delete</a>				
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection