@extends('master')
@section('content')
<div class="ht__breadcrumb__area bg-image--4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__inner text-center">
                    <h2 class="breadcrumb-title">Audio Book</h2>
                    <nav class="breadcrumb-content">
                        <a class="breadcrumb_item" href="{{ url('/') }}">Home</a>
                        <span class="brd-separator">/</span>
                        <span class="breadcrumb_item active">Audio Book</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcrumb area -->
<!-- Start Shop Page -->
<section class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab__container tab-content">
                    <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
                        <div class="row">
                            <!-- Start Single Product -->
                                <!-- Start Single Product -->
                                @foreach ($audioBooks as $items)
                                <div class="product product__style--3 col-lg-3 col-md-3 col-sm-5 col-12">
                                    <ul>
                                        <li><h3>Name : {{ $items->name }}</h3></li>
                                        <li><p>Author Name : {{ $items->author_name }}</p></li>
                                    </ul>
                                        <ul>
                                            <li>
                                        <audio controls>
                                            <source src="{{ asset('assets/uploads/audiobooks/'.$items->file) }}" type="audio/ogg">
                                          Your browser does not support the audio element.
                                          </audio>
                                            </li>
                                            <li><a class="btn btn-success" href="{{ url('download/'.$items->file) }}">Download Audio</a></li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            <!-- End Single Product -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Page -->
@endsection
