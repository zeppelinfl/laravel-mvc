@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>Pages</h2>
	<div class="add_contact">
		<a href="{{ route('pageCreateA') }}">Add</a>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Title</th>
				<th scope="col">Updated</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pages as $page)
				<tr>
					<td>{{ $page->id }}</td>
					<td>{{ $page->title }}</td>
					<td>{{ $page->created_at }}</td>
					<td>{{ $page->updated_at }}</td>
					<td>
						<a href="{{ route('pageViewA', ['id' => $page->id]) }}">View</a>
						<a href="{{ route('pageEditA', ['id' => $page->id]) }}">Edit</a>
						<a href="{{ route('pageDeleteA', ['id' => $page->id]) }}">Delete</a>				
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection