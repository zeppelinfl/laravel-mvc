@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('search.search', ['cities' => $cities])
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
      	@include('homepage.categories', ['categories' => $categories])  
    </div>
</div>
@include('homepage.place', ['places' => $places, 'page' => $page_place, 'place_count' => $place_count])
@include('homepage.join', ['page' => $page])
@include('homepage.review', ['reviews' => $reviews, 'page' => $page_review])
@include('homepage.stats')
@include('homepage.experience', ['experiences' => $experiences, 'page' => $page_experience])
@include('homepage.event', ['events' => $events, 'page' => $page_event, 'event_count' => $event_count])
<div class="container">
	@include('homepage.works', ['page' => $page_work])
</div>
<example-component></example-component>
@endsection
