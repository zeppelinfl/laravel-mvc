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
<div class="container">
    <div class="row justify-content-center">
      	@include('homepage.place', ['places' => $places, 'page' => $page_place])  
    </div>
</div>
@include('homepage.join', ['page' => $page])
@include('homepage.review', ['reviews' => $reviews, 'page' => $page_review])
@include('homepage.stats')
@include('homepage.experience', ['experiences' => $experiences, 'page' => $page_experience])
<div class="container">
    <div class="row justify-content-center">
      	@include('homepage.event', ['events' => $events, 'page' => $page_event])
    </div>
</div>
<div class="container">
	@include('homepage.works', ['page' => $page_work])
</div>
@endsection
