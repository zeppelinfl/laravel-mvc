@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('userStoreA', ['id' => $user->id]) }}" class="form" enctype="multipart/form-data">
		@csrf
		<input type="hidden" name="id" value="{{ $user->id }}">
		<div class="row">
			<div class="col"><h2>Update user {{ $user->email }}</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="name" value="{{ $user->name }}" placeholder="Name"></div>
		</div>
		<div class="row">
			<div class="col"><input type="email" name="email" value="{{ $user->email }}" placeholder="E-mail"></div>
		</div>
		<img src="{{ asset('storage/users/'.$user->image) }}" alt="" title="">
		<div class="row">
			<div class="col col-2">
				<label for="date-event">Add Image: </label>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<input type="file" name="image" placeholder="Select image">
			</div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Save"></div>
		</div>
	</form>
</div>
@endsection