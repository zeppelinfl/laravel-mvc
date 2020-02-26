@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>Contacts</h2>
	<div class="add_contact">
		<a href="{{ route('reviewCreateA') }}">Add</a>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Message Short</th>
				<th scope="col">User</th>
				<th scope="col">Created</th>
				<th scope="col">Updated</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($reviews as $review)
				<tr>
					<td>{{ $review->id }}</td>
					<td>{{ $review->message }}</td>
					<td>{{ $review->user_name }}</td>
					<td>{{ $review->created_at }}</td>
					<td>{{ $review->updated_at }}</td>
					<td>
						<a href="{{ route('reviewViewA', ['id' => $review->id]) }}">View</a>
						<a href="{{ route('reviewEditA', ['id' => $review->id]) }}">Edit</a>
						<a href="{{ route('reviewDeleteA', ['id' => $review->id]) }}">Delete</a>				
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection