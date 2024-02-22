@extends('master')
@section('content')
 <!-- Start breadcrumb area -->
 <div class="ht__breadcrumb__area bg-image--4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__inner text-center">
                    <h2 class="breadcrumb-title">Shop Single</h2>
                    <nav class="breadcrumb-content">
                        <a class="breadcrumb_item" href="{{ url('/') }}">Home</a>
                        <span class="brd-separator">/</span>
                        <span class="breadcrumb_item active">Shop Single</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcrumb area -->
    <!-- Start main Content -->
    <div class="maincontent bg--white pt--80 pb--55">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="wn__single__product">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="wn__fotorama__wrapper">
                                    <div class="fotorama wn__fotorama__action" data-nav="thumbs">
                                        <a href="#"><img src="{{ asset('assets/uploads/books/'.$book->image) }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product__info__main">
                                    <h1>{{ $book->name }}</h1>
                                    <p>by {{ $book->author_name }}</p>
                                    <div class="price-box">
                                        <span>Tk.{{ $book->selling_price }}</span>
                                    </div>
                                    <div class="product__overview">
                                        <p>{{ $book->short_description }}</p>
                                    </div>
                                    <div class="box-tocart d-flex">
                                        <form action="{{ url('cart-store') }}" method="POST">
                                            @csrf
                                            <input name="book_id"
                                             type="hidden" value="{{ $book->id }}">
                                            <span>Qty</span>
                                            <input id="qty" class="input-text qty" name="qty" min="1" value="1"
                                                title="Qty" type="number">
                                            <div class="addtocart__actions">
                                                <button class="tocart" type="submit" title="Add to Cart">Add to
                                                    Cart
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="box-tocart d-flex">
                                            <div class="addtocart__actions">
                                                <a class="tocart" type="button" href="{{ url('rent-view/'.$book->id) }}">Take Rent
                                                </a>
                                            </div>
                                    </div>
                                    <div class="product_meta">
											<span class="posted_in">Category:
												<a href="#">{{ $book->category->name }}</a>
											</span>
                                    </div>
                                    <div class="product-share">
                                        <ul>
                                            <li class="categories-title">Share :</li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-twitter icons"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-tumblr icons"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-facebook icons"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-linkedin icons"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__info__detailed">
                        <div class="pro_details_nav nav justify-content-start" role="tablist">
                            <a class="nav-item nav-link active" data-bs-toggle="tab" href="#nav-details"
                               role="tab">Details</a>
                        </div>
                        <div class="tab__container tab-content">
                            <!-- Start Single Tab Content -->
                            <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                                <div class="description__attribute">
                                    <p>{{ $book->long_description }}</p>
                                </div>
                            </div>
                            <!-- End Single Tab Content -->
                        </div>
                    </div>
                    <div class="wn__related__product pt--80 pb--50">
                        <div class="section__title text-center">
                            <h2 class="title__be--2">Trending Books</h2>
                        </div>
                        <div class="row mt--60">
                            <div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
                                @foreach ($trendings as $items)
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End main Content -->
@endsection
