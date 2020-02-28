@extends('layouts.app')
@section('content')
<div class="container content-white">
    <div class="row justify-content-center">
      	<div class="content content-center">
			<div class="container-fluid top-content" id="events">
				<h2>Event</h2>
				<div class="places-reviews text-left"> 
					<article class="review-event">
						<div class="review-image" style="background-image: url({{ asset('storage/'.$event->image) }});">
							<i class="fa fa-heart"></i>
							<div class="review-mark-events">{{ $event->date }}</div>
						</div>
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
				</div>
			</div>
		</div>
    </div>
</div>
@endsection