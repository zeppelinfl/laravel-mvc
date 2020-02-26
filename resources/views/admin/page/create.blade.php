@extends('layouts.adminapp')
@section('content')
<div class="container">
	<form method="POST" action="{{ route('pageStoreA') }}" class="form">
		@csrf
		<div class="row">
			<div class="col"><h2>Create Page</h2></div>
		</div>
		<div class="row">
			<div class="col"><input type="text" name="title" placeholder="Title"></div>
		</div>
		<div class="row">
			<div class="col"><textarea name="content" placeholder="Content"></textarea></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Create"></div>
		</div>
	</form>
</div>
@endsection