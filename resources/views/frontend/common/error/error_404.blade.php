@extends('frontend.common.error.master')
@section('title') {{'Error-404'}} @endsection
@section('main-content')

<div class="main-container">
    <!-- content start -->
    <div class="page-not-found">
        <div class="page-not-found-inner">
            <div class="notfound-404">
                <h1>404</h1>
            </div>
            <h2>OOPS! NOTHING WAS FOUND</h2>
            <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.
                <a href="{{url('/')}}"> Return to Homepage</a></p>

            <div class="notfound-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
    <!-- content end -->
</div>

@endsection
