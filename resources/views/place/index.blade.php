@extends('layouts.app')
@section('content')
<div class="content content-white">
	<div class="new-places-container" id="experiences">
		<h2>Places</h2>
		<div class="row">
			@foreach($places as $place)
			<article class="review">
				<a href="{{ route('placeViewF', $place->id) }}">
					<div class="review-image" style="background-image: url({{ asset('storage/places/'.$place->image) }});">
						<i class="fa fa-heart"></i>
						<div class="review-mark review-score-<?php echo $place['score']; ?>">{{ $place->review_score }}</div>
					</div>
				</a>
				<article class="review-content">
					<i class="fa fa-history flex"><p class="left-5">{{ $place->time }}</p></i>
					<br>
					<h5>{{ $place->name }}</h2>
					<br>
					<div class="left grey">{{ $place['subcategory']->name }}</div>
					<div class="right grey top-less"><i class="fa fa-search">{{ $place->review_count }} Reviews</i></div>
					<hr>
					<div class="review-content-location"><i class="fa fa-map-marker grey"> {{ $place->address }}</i></div>
				</article>
			</article>
			@endforeach
		</div>
	</div>
</div>
@endsection