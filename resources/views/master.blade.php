<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home | UIU Boi Ghor</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('frontend/home') }}/images/favicon.ico">
    <link rel="apple-touch-icon" href="{{ asset('frontend/home') }}/images/icon.png">

    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/home') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/home') }}/css/plugins.css">
    <link rel="stylesheet" href="{{ asset('frontend/home') }}/css/style.css">

    <!-- Cusom css -->
    <link rel="stylesheet" href="{{ asset('frontend/home') }}/css/custom.css">

    <!-- Modernizer js -->
    <script src="{{ asset('frontend/home') }}/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>

<!-- Main wrapper -->
<div class="wrapper" id="wrapper">
    <!-- Header -->
    <header id="wn__header" class="header__area header__absolute sticky__header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('frontend/home') }}/images/logo/logo.png" alt="logo images">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block">
                    <nav class="mainmenu__nav">
                        <ul class="meninmenu d-flex justify-content-start">
                            <li class="drop with--one--item"><a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="drop"><a href="#">Categories</a>
                                <div class="megamenu mega02">
                                    <ul class="item item02">
                                        <li class="title">All Categories</li>
                                        @foreach ($categories as $items)
                                        <li><a href="{{ url('book-category/'.$items->id) }}">{{ $items->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            {{-- <li class="drop"><a href="#">Exchange Deals</a>
                            </li> --}}
                            {{-- @guest
                               @if (Route::has('login'))
                                    <li class="drop">
                                       <a href="{{ url('exchange') }}">Exchange</a>
                                    </li>
                               @endif
                               @else
                                    <li class="drop">
                                       <a href="{{ url('exchange') }}"
                                       onclick="alert('You must Login First!!')"
                                       >Exchange</a>
                                    </li>
                            @endguest --}}
                            @guest
                               @if (Route::has('login'))
                                    <li class="drop">
                                       <a href="{{ url('donate') }}">Donate</a>
                                    </li>
                               @endif
                               @else
                                    <li class="drop">
                                       <a href="{{ url('donate') }}"
                                       onclick="alert('You must Login First!!')"
                                       >Donate</a>
                                    </li>
                            @endguest
                            <li class="drop"><a href="{{ url('audio-book') }}">Audio Books</a>
                            </li>
                            <li><a href="{{ url('contact-us') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                    <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                        <li class="shop_search" style="margin-right: 10px"><a class="search__active" href="#"></a></li>
                        <li class="shopcart"><a class="cartbox_active" href="#"><span
                            @if(Auth::user())
                                class="product_qun">{{ $cart->count() }}</span></a>
                            <!-- Start Shopping Cart -->
                                <div class="block-minicart minicart__active">
                                    <div class="minicart-content-wrapper">
                                        <div class="micart__close">
                                            <span>close</span>
                                        </div>
                                        <div class="items-total d-flex justify-content-between">
                                            <span>{{ $cart->count() }} items</span>
                                            <span>Cart Subtotal</span>
                                        </div>
                                        @php
                                        $subtotal = 0;
                                        @endphp
                                        @foreach($cart as $item)
                                        @php
                                        $subtotal = $subtotal + $item->books->selling_price*$item->qty;
                                        @endphp
                                    @endforeach
                                        <div class="total_amount text-end">
                                            <span>Tk.{{ $subtotal }}</span>
                                        </div>
                                        <div class="mini_action checkout">
                                            <a class="checkout__btn" href="{{ url('checkout') }}">Go to Checkout</a>
                                        </div>
                                        <div class="single__items">
                                            <div class="miniproduct">
                                                @foreach ($cart as $item)
                                                <div class="item01 d-flex mt--20">
                                                    <div class="thumb">
                                                        <a href="product-details.html"><img
                                                                src="{{ asset('assets/uploads/books/'.$item->books->image) }}"
                                                                alt="product images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h6><a href="product-details.html">{{ $item->books->name }}</a></h6>
                                                        <span class="price">Tk.{{ $item->books->selling_price }}</span>
                                                        <div class="product_price d-flex justify-content-between">
                                                            <span class="qun">{{ $item->qty }}</span>
                                                            <ul class="d-flex justify-content-end">
                                                                <li><a href="{{ url('delete-cart/'.$item->id) }}"><i class="zmdi zmdi-delete"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Shopping Cart -->
                            @else
                            @endif
                        </li>
                        <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                            <div class="searchbar__content setting__block">
                                <div class="content-inner">
                                    <div class="switcher-currency">
                                        @guest
                                        @if(Route::has('login') or Route::has('register'))
                                        <strong class="label switcher-label">
                                            <span href="#">Login/Register</span>
                                        </strong>
                                        @endif
                                        @else
                                        <strong class="label switcher-label">
                                            <a href="{{ url('user-profile') }}">View Profile</a>
                                        </strong>
                                        @endguest
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <div class="setting__menu">
                                                   @guest
                                                      @if (Route::has('login'))
                                                      <span><a href="{{ route('login') }}">Login</a></span>
                                                      @endif
                                                   @if (Route::has('register'))
                                                    <span><a href="{{ route('register') }}">Signup</a></span>
                                                   @endif
                                                   @else
                                                    <span>  <a  href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                            logout
                                                          </a>
                                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                      </span>
                                                  @endguest
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu d-block d-lg-none">
            </div>
            <!-- Mobile Menu -->
        </div>
    </header>
    <!-- //Header -->
    <!-- Start Search Popup -->
    <div class="brown--color box-search-content search_active block-bg close__top">
        <form id="search_mini_form" class="minisearch" action="#">
            <div class="field__search">
                <input type="text" placeholder="Search entire store here...">
                <div class="action">
                    <a href="#"><i class="zmdi zmdi-search"></i></a>
                </div>
            </div>
        </form>
        <div class="close__wrap">
            <span>close</span>
        </div>
    </div>
    <!-- End Search Popup -->
    @yield('content')
     <!-- Footer Area -->
     <footer id="wn__footer" class="footer__area bg__cat--8 brown--color mt-5">
        <div class="footer-static-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__widget footer__menu">
                            <div class="ft__logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('frontend/home') }}/images/logo/3.png" alt="logo" >
                                </a>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered duskam alteration variations of passages</p>
                            </div>
                            <div class="footer__content">
                                <ul class="social__net social__net--2 d-flex justify-content-center">
                                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="#"><i class="bi bi-google"></i></a></li>
                                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                    <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="copyright">
                            <div class="copy__right__inner text-start">
                                <p>&copy; 2022, UIUBoiGhor. Made with <i class="fa fa-heart text-danger"></i> by <a
                                        href="{{ url('/') }}" target="_blank">UIUBoiGhor</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="payment text-end">
                            <img src="{{ asset('frontend/home') }}/images/icons/payment.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //Footer Area -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header modal__header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="{{ asset('frontend/home') }}/images/product/big-img/1.jpg">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1>Simple Fabric Bags</h1>
                                <div class="rating__and__review">
                                    <ul class="rating">
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#">4 customer reviews</a>
                                    </div>
                                </div>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">$17.20</span>
                                        <span class="old-price">$45.00</span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    Designed for simplicity and made from high quality materials. Its sleek geometry
                                    and material combinations creates a modern look.
                                </div>
                                <div class="select__color">
                                    <h2>Select color</h2>
                                    <ul class="color__list">
                                        <li class="red"><a title="Red" href="#">Red</a></li>
                                        <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    </ul>
                                </div>
                                <div class="select__size">
                                    <h2>Select size</h2>
                                    <ul class="color__list">
                                        <li class="l__size"><a title="L" href="#">L</a></li>
                                        <li class="m__size"><a title="M" href="#">M</a></li>
                                        <li class="s__size"><a title="S" href="#">S</a></li>
                                        <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                        <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social__net social__net--2 d-flex justify-content-start">
                                            <li class="facebook"><a href="#" class="rss social-icon"><i
                                                    class="zmdi zmdi-rss"></i></a></li>
                                            <li class="linkedin"><a href="#" class="linkedin social-icon"><i
                                                    class="zmdi zmdi-linkedin"></i></a></li>
                                            <li class="pinterest"><a href="#" class="pinterest social-icon"><i
                                                    class="zmdi zmdi-pinterest"></i></a></li>
                                            <li class="tumblr"><a href="#" class="tumblr social-icon"><i
                                                    class="zmdi zmdi-tumblr"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END QUICKVIEW PRODUCT -->
</div>
<!-- //Main wrapper -->

<!-- JS Files -->
<script src="{{ asset('frontend/home') }}/js/vendor/jquery.min.js"></script>
<script src="{{ asset('frontend/home') }}/js/popper.min.js"></script>
<script src="{{ asset('frontend/home') }}/js/vendor/bootstrap.min.js"></script>
<script src="{{ asset('frontend/home') }}/js/plugins.js"></script>
<script src="{{ asset('frontend/home') }}/js/active.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('status'))
    <script>
        swal("{{ session('status') }}");
    </script>
@endif

</body>

</html>
