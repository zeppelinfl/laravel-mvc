<div class="content">
	<div class="container container-top">
		<div class="row">
		    <div class="col-md">
		      <div class="join-content-top">Find out perfect place to hangout in your city.</div>
			  <div class="join-title-top">Find amazing hotspots.</div>
		    </div>
		 </div>
		 <form method="POST" action="{{ route('searchF') }}">
		 	@csrf
			 <div class="row row-top">
			 	<div class="col-xs-6 col-md-5">
					<input type="text" name="search" placeholder="What are you looking for?" class="form-control input-top">
			 	</div>
	    		<div class="col-xs-6 col-md-3">
		      		<select name="location" class="form-control caret select-top">
		      			<option>Location?</option>
		      			@foreach($cities as $city)
		      				<option value="{{ $city->id }}">{{ $city->name }}</option>
		      			@endforeach
			      	</select>
	    		</div>
	    		<div class="col-xs-6 col-md-3">
	    			<div class="bordered-red search-top">
		    			<i class="fa fa-search header-top">
		    				<p class="logo-text"><input type="submit" class="search_input" value="Search"></p>
		    			</i>
					</div>
	    		</div>
			</div>
		</form>
		<div class="row">
		    <div class="search-tags">
				<p id="grey">Popular categories: </p><p>#restaurant, #hotels, #vacation, #rentals, #nightlive, #shopping, ...</p>
			</div>
		</div>
	</div>
</div>