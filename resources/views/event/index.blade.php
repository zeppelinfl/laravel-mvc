@extends('layouts.app')
@section('content')
<div class="content content-white">
	<div class="new-places-container" id="experiences">
		<h2>Events</h2>
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
@endsection