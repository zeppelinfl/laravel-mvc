@extends('layouts.adminapp')
@section('content')
<div class="container">
	<h2>View Page: {{ $page->title }}</h2>
	<div class="row row-view">
		<div class="col col-3">Title</div>
		<div class="col col-2 bold">{{ $page->title }}</div>
	</div>
	<div class="row row-view">
		<div class="col col-3">Content</div>
	</div>
	<div class="row row-view">
		<div class="col bold">{{ $page->content }}</div>
	</div>
</div>
@endsection