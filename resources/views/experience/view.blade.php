@extends('layouts.app')
@section('content')
<div class="container content-white">
    <div class="row justify-content-center">
    	<h2>Experiences</h2>
      	<div class="content experiences-list-page">
			<div class="new-places-container" id="experiences">
				<div class="row white">
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
				</div>
				<h2>Cities</h2>
				<div class="row">
					@foreach ($experience['city_list'] as $key => $city)
						<div class="col col-2 experience-page-cities">
							<div>City: {{ $city->name }}</div>
							<div>Listings: {{ $city->listings }}</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
    </div>
</div>
@endsection