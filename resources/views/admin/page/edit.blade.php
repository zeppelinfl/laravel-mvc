@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('pageStoreA') }}" class="form">
		@csrf
		<input type="hidden" name="id" value="{{ $page->id }}">
		<div class="row">
			<div class="col"><h2>Create Page</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="title" placeholder="Title" value="{{ $page->title }}"></div>
		</div>
		<div class="row">
			<div class="col"><textarea name="content" placeholder="Content">{{ $page->title }}</textarea></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Save"></div>
		</div>
	</form>
</div>
@endsection