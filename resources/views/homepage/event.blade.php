<div class="content">
	<div class="new-places-container" id="experiences">
		<div class="row title-width">
			<div class="col-md text-left margin-top-40">
				<div class="top-title text-left">{{ $page->title }}</div>
				<div class="top-title-line pink-color"></div>
				<div class="top-text text-left">{{ $page->content }}</div>
			</div>
		</div>
		<div class="row">
			@foreach($events as $key => $event)
				<article class="review-event">
					<a href="{{ route('eventViewF', $event->id) }}">
						<div class="review-image" style="background-image: url({{ asset('storage/'.$event->image) }});">
							<i class="fa fa-heart"></i>
							<div class="review-mark-events">{{ $event->date }}</div>
						</div>
					</a>
					<article class="review-content">
						<i class="fa fa-history flex-event"><p class="event-time">{{ $event->time }}</p></i>
						<br>
						<h5>{{ $event->name }}</h2>
						<br>
						<div class="left grey">{{ $event['type']->name }}</div>
						<div class="right grey top-less"><i class="fa fa-search">{{ $event->review_count }} Reviews</i></div>
						<hr>
						<div class="review-content-location"><i class="fa fa-map-marker grey"> {{ $event->address }}</i></div>
					</article>
				</article>
			@endforeach
		</div>
	</div>
</div>
<div class="content view-all-events">
	<a href="{{ route('eventF') }}" class="view_all"><span class="red-color">View All Events</span>({{ $event_count }})</a>
</div>