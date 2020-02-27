<div class="content">
	<div class="new-places-container" id="experiences">
		<div class="row title-width">
			<div class="col-md text-left margin-top-40">
				<div class="join-people-title">{{ $page->title }}</div>
				<div class="join-people-line"></div>
				<div class="join-people-content">{{ $page->content }}</div>
			</div>
		</div>
		<div class="row white">
			@foreach($experiences as $experience)
				<div class="col-md picture-set" style="background-image: url({{ asset('storage/experiences/'.$experience->image) }})">
					<div class="new-places-title">{{ $experience['name']->name }}</div>
					<div class="new-places-info">• {{ $experience->cities }} Cities • {{ $experience->listings }} Listing</div>
					<div class="bordered-left">
		    			<i class="fa fa-plus top-px-9">
							<p class="logo-text">Explore</p>
		    			</i>
				  	</div>
				</div>
			@endforeach
		</div>
	</div>
</div>
<div class="container">
	<hr>
</div>