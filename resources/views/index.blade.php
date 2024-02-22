@extends('master')
@section('content')
    <!-- Start Slider area -->
    <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        <!-- Start Single Slide -->
        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider__content">
                            <div class="contentbox">
                                <h2>Buy <span>your </span></h2>
                                <h2>favourite <span>Book </span></h2>
                                <h2>from <span>Here </span></h2>
                                <a class="shopbtn" href="{{ url('all-books') }}">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
        <!-- Start Single Slide -->
        <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider__content">
                            <div class="contentbox">
                                <h2>Buy <span>your </span></h2>
                                <h2>favourite <span>Book </span></h2>
                                <h2>from <span>Here </span></h2>
                                <a class="shopbtn" href="{{ url('all-books') }}">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
    </div>
    <!-- End Slider area -->
    <!-- Start BEst Seller Area -->
    <section class="wn__product__area brown--color pt--80  pb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">Trending <span class="color--theme">Books</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <!-- Start Single Tab Content -->
            <div class="furniture--4 border--round arrows_style owl-carousel owl-theme mt--50">
                @foreach ($books as $items)
                <!-- Start Single Product -->
                <div class="product product__style--3">
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
            <!-- End Single Tab Content -->
        </div>
    </section>
    <div style="text-align: center"><a class="shopbtn" href="{{ url('trendings') }}">View All</a></div>
    <!-- Start BEst Seller Area -->
    <section class="wn__product__area brown--color pt--80  pb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">Academic <span class="color--theme">Books</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <!-- Start Single Tab Content -->
            <div class="furniture--4 border--round arrows_style owl-carousel owl-theme mt--50">
                @foreach ($academics as $items)
                <!-- Start Single Product -->
                <div class="product product__style--3">
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
            <!-- End Single Tab Content -->
        </div>
    </section>
    <div style="text-align: center"><a class="shopbtn" href="{{ url('academics') }}">View All</a></div>
    <section class="wn__product__area brown--color pt--80  pb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">Fictional <span class="color--theme">Books</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <!-- Start Single Tab Content -->
            <div class="furniture--4 border--round arrows_style owl-carousel owl-theme mt--50">
                @foreach ($fictionals as $items)
                <!-- Start Single Product -->
                <div class="product product__style--3">
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
            <!-- End Single Tab Content -->
        </div>
    </section>
    <div style="text-align: center"><a class="shopbtn" href="{{ url('fictionals') }}">View All</a></div>
    <!-- Start NEwsletter Area -->
    <section class="wn__newsletter__area bg-image--2 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
                    <div class="section__title text-center">
                        <h2>Stay With Us</h2>
                    </div>
                    <div class="newsletter__block text-center">
                        <p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest
                            lookbooks and exclusive offers.</p>
                        <form action="#">
                            <div class="newsletter__box">
                                <input type="email" placeholder="Enter your e-mail">
                                <button>Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End NEwsletter Area -->
    <!-- Start Best Seller Area -->
    <section class="wn__bestseller__area bg--white pt--80  pb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">All <span class="color--theme">Books</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <div class="furniture--4 border--round arrows_style owl-carousel owl-theme mt--50">
            @foreach ($all as $items)
                <!-- Start Single Product -->
                <div class="product product__style--3">
                    <div class="product__thumb">
                        <a class="first__img" href="single-product.html"><img src="{{ asset('assets/uploads/books/'.$items->image) }}"
                                                                              alt="product image" style="height: 370px; width: 510px"></a>
                    </div>
                    <div class="product__content content--center">
                        <h4><a href="single-product.html">{{ $items->name }}</a></h4>
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
    </section>
    <div style="text-align: center"><a class="shopbtn" href="{{ url('all-books') }}">View All</a></div>
    <!-- Start BEst Seller Area -->
@endsection
