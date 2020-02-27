<div class="container-fluid categ-fluid">
	@foreach ($categories as $category)
		<article class="categ-list">
   			<i class="fa {{ $category->awesome_sign }} signs-cat"></i>
   			<p class="title-cat">{{ $category->name }}</p>
   			<p class="loc-cat">{{ $category->location_number }} Locations</p>
   		</article>	
	@endforeach
</div>