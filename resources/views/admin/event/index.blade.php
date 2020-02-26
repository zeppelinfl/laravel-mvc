@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>Events</h2>
	<div class="add_contact">
		<a href="{{ route('eventCreateA') }}">Add</a>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Type</th>
				<th scope="col">City</th>
				<th scope="col">Date</th>
				<th scope="col">Time</th>
				<th scope="col">Created</th>
				<th scope="col">Updated</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($events as $event)
				<tr>
					<td>{{ $event->id }}</td>
					<td>{{ $event->name }}</td>
					<td>{{ $event['type_name']->name }}</td>
					<td>{{ $event['city_name']->name }}</td>
					<td>{{ $event->date }}</td>
					<td>{{ $event->time }}</td>
					<td>{{ $event->created_at }}</td>
					<td>{{ $event->updated_at }}</td>
					<td>
						<a href="{{ route('eventViewA', ['id' => $event->id]) }}">View</a>
						<a href="{{ route('eventEditA', ['id' => $event->id]) }}">Edit</a>
						<a href="{{ route('eventDeleteA', ['id' => $event->id]) }}">Delete</a>				
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection