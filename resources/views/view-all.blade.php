@extends('master')
@section('content')
<div class="ht__breadcrumb__area bg-image--4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__inner text-center">
                    <h2 class="breadcrumb-title">Shop</h2>
                    <nav class="breadcrumb-content">
                        <a class="breadcrumb_item" href="index.html">Home</a>
                        <span class="brd-separator">/</span>
                        <span class="breadcrumb_item active">Books</span>
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
                                @foreach ($books as $items)
                                <!-- Start Single Product -->
                                <div class="product product__style--3 col-lg-3 col-md-3 col-sm-5 col-12">
                                    <div class="product__thumb">
                                        <a class="first__img" href="{{ url('single-view/'.$items->id) }}"><img src="{{ asset('assets/uploads/books/'.$items->image) }}"
                                                                                              alt="product image" style="height: 370px; width: 510px"></a>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="{{ url('single-view/'.$items->id) }}">{{ $items->name }}</a></h4>
                                        <ul class="price d-flex">
                                            <li>Tk.{{ $items->selling_price }}</li>
                                            <li class="old_price">Tk.{{ $items->original_price }}</li>
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
