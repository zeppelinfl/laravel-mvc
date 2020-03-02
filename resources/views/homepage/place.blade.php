<div class="content">
	<div class="new-places-container" id="experiences">
		<div class="row title-width">
			<div class="col-md text-left margin-top-40">
				<div class="top-title text-left">{{ $page->title }}</div>
				<div class="top-title-line"></div>
				<div class="top-text text-left">{{ $page->content }}</div>
			</div>
		</div>
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
<div class="content view-all-events">
	<a href="{{ route('placeF') }}" class="view_all"><span class="red-color">View All Places</span>({{ $place_count }})</a>
</div>