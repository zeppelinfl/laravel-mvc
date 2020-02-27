<div class="content content-people" id="people">
	<div class="layer-put"></div>
	<div class="container margins-container-people">
		<div class="row">
			<div class="col-md text-left margin-top-40">
				<div class="people-title">{{ $page->title }}</div>
				<div class="join-people-line"></div>
				<div class="people-content grey-color">{{ $page->content }}</div>
			</div>
		</div>
		<div class="row">
			@foreach($reviews as $review)
				<div class="col-md bordered-col">
					<div class="testimonial-logo"><i class="fa fa-quote-right"></i></div>
					<div class="testimonial-content">" {{ $review->message }} "</div>
					<picture>
						@if($review['user']->image != '')
							<img src="{{ asset('storage/users/'.$review['user']->image) }}" alt="no-image" class="user-image moved-user">
						@else
							<img src="{{ asset('storage/users/no-image.jpeg') }}" alt="no-image" class="user-image moved-user">
						@endif
						<p class="moved-user user-name">{{ $review['user']->name }}</p>
					</picture>
				</div>
			@endforeach
		</div>
	</div>
</div>