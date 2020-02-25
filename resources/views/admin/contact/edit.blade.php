@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('contactStoreA', ['id' => $contact->id]) }}" class="form">
		@csrf
		<input type="hidden" name="id" value="{{ $contact->id }}">
		<div class="row">
			<div class="col"><h2>Edit contact {{ $contact->id }}</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="name" value="{{ $contact->name }}" placeholder="Name"></div>
		</div>
		<div class="row">
			<div class="col"><input type="email" name="email" value="{{ $contact->email }}" placeholder="E-mail"></div>
		</div>
		<div class="row">
			<div class="col"><textarea name="content" placeholder="Message">{{ $contact->content }}</textarea></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Create"></div>
		</div>
	</form>
</div>
@endsection