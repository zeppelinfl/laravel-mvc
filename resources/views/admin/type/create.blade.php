@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('typeStoreA') }}" class="form">
		@csrf
		<div class="row">
			<div class="col"><h2>Create Type</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="name" placeholder="Name"></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Create"></div>
		</div>
	</form>
</div>
@endsection