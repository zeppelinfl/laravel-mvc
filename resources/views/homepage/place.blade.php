<div class="content content-top-20 content-center" id="places">
	<div class="container-fluid top-content">
		<div class="top-title text-left">{{ $page->title }}</div>
		<div class="top-title-line"></div>
		<div class="top-text text-left">{{ $page->content }}</div>
		<div class="places-reviews slick-carrousel text-left"> 
			@foreach($places as $place)
			<article class="review">
				<div class="review-image" style="background-image: url({{ asset('storage/places/'.$place->image) }});">
					<i class="fa fa-heart"></i>
					<div class="review-mark review-score-<?php echo $place['score']; ?>">{{ $place->review_score }}</div>
				</div>
				<article class="review-content">
					<i class="fa fa-history flex"><p class="left-5">{{ $place->time }}</p></i>
					<br>
					<h5>{{ $place->name }}</h2>
					<br>
					<div class="left grey">{{ $place['subcategory']->name }} $$</div>
					<div class="right grey top-less"><i class="fa fa-search">{{ $place->review_count }} Reviews</i></div>
					<hr>
					<div class="review-content-location"><i class="fa fa-map-marker grey"> {{ $place->address }}</i></div>
				</article>
			</article>
			@endforeach
		</div>
	</div>
</div>