@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>View Contact: {{ $contact->name }} from: {{ $contact->email }}</h2>
	<div class="row row-view">
		<div class="col col-3">Name</div>
		<div class="col col-2 bold">{{ $contact->name }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Email</div>
		<div class="col col-2 bold">{{ $contact->email }}</div>
	</div>
	<div class="row ">
		<div class="col">Content</div>
	</div>
	<div class="row row-view">
		<div class="col bold">{{ $contact->content }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Created</div>
		<div class="col col-2">{{ $contact->created_at }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Updated</div>
		<div class="col col-2">{{ $contact->updated_at }}</div>
	</div>
</div>
@endsection