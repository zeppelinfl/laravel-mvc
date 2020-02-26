@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('search.search', ['cities' => $cities])
        </div>
    </div>
</div>
@endsection
