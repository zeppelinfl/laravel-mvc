@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>Experiences</h2>
	<div class="add_contact">
		<a href="{{ route('experienceCreateA') }}">Add</a>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Countries</th>
				<th scope="col">Cities</th>
				<th scope="col">Created</th>
				<th scope="col">Updated</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($experiences as $experience)
				<tr>
					<td>{{ $experience->id }}</td>
					<td>{{ $experience['country_name']->name }}</td>
					<td>{{ $experience['cities_count'] }}</td>
					<td>{{ $experience->created_at }}</td>
					<td>{{ $experience->updated_at }}</td>
					<td>
						<a href="{{ route('experienceViewA', ['id' => $experience->id]) }}">View</a>
						<a href="{{ route('experienceEditA', ['id' => $experience->id]) }}">Edit</a>
						<a href="{{ route('experienceDeleteA', ['id' => $experience->id]) }}">Delete</a>				
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection