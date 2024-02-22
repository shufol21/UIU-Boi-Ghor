@extends('master')
@section('content')
<!-- Start breadcrumb area -->
<div class="ht__breadcrumb__area bg-image--4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__inner text-center">
                    <h2 class="breadcrumb-title">Profile</h2>
                    <nav class="breadcrumb-content">
                        <a class="breadcrumb_item" href="{{ url('/') }}">Home</a>
                        <span class="brd-separator">/</span>
                        <span class="breadcrumb_item active">Profile</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcrumb area -->
<div class="page-blog-details pt--80 pb--45 bg--white">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12">
                <div class="blog-details content">
                    <article class="blog-post-details">
                        <div class="post-thumbnail">
                            <img src="{{ asset('frontend/home/images/profile.jpg') }}" alt="portfolio images" style="height:250px">
                        </div>
                        <div class="post_wrapper">
                            <div class="post_header">
                                <h2>{{ Auth::user()->name }}</h2>
                                <ul class="">
                                    <li>email : <span>{{ Auth::user()->email }}</span></li>
                                </ul>
                            </div>
                            <ul class="social__net--4 d-flex justify-content-start">
                                <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-tumblr"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <a class="btn btn-warning" href="{{ url('user-order-history') }}" style="margin-top: 50px; margin-right:100px">Order History</a>
            </div>
        </div>
    </div>
</div>
@endsection
