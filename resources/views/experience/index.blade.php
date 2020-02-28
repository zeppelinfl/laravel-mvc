@extends('layouts.app')
@section('content')
<div class="content content-white">
	<div class="new-places-container" id="experiences">
		<div class="row white">
			@foreach($experiences as $experience)
				<div class="col-md picture-set" style="background-image: url({{ asset('storage/experiences/'.$experience->image) }})">
					<div class="new-places-title">{{ $experience['name']->name }}</div>
					<div class="new-places-info">• {{ $experience->cities }} Cities • {{ $experience->listings }} Listing</div>
					<a href="{{ route('experienceViewF', $experience->id ) }}">
						<div class="bordered-left">
			    			<i class="fa fa-plus top-px-9">
								<p class="logo-text">Explore</p>
			    			</i>
					  	</div>
				  	</a>
				</div>
			@endforeach
		</div>
	</div>
</div>
@endsection