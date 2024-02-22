@extends('master')
@section('content')
     <!-- Start breadcrumb area -->
     <div class="ht__breadcrumb__area bg-image--4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__inner text-center">
                        <h2 class="breadcrumb-title">Rent</h2>
                        <nav class="breadcrumb-content">
                            <a class="breadcrumb_item" href="{{ url('/') }}">Rent a book</a>

                            <span class="breadcrumb_item active">for 15 days</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcrumb area -->
    <!-- Start Checkout Area -->
    <section class="wn__checkout__area section-padding--lg bg__white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
                    <div class="wn__order__box">
                        <h3 class="order__title">Book For Rent</h3>
                        <ul class="order__total">
                            <li>Book</li>
                            <li>Total</li>
                        </ul>
                        <ul class="order_product">
                            <li>{{ $book->name }}<span>Tk.50</span></li>
                        </ul>
                        <ul class="shipping__method">
                            <li>Shipping
                                <ul>
                                    <li>
                                        <input name="shipping_method[0]" data-index="0" value="legacy_flat_rate"
                                               checked="checked" type="radio">
                                        <label>Flat Rate: Tk.50.00</label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="total__amount">
                            <li>Total <span>Tk. 100.00</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="customer_details">
                        <h3>Billing details</h3>
                        <form action="{{ url('confirm-rent') }}" method="POST">
                            @csrf
                        <div class="customar__field">
                                <div class="input_box">
                                    <label>Name <span>*</span></label>
                                    <input type="text" name="name" value="{{ Auth::user()->name }}">
                                    <input type="hidden" name="price" value="100">
                                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                                </div>
                            <div class="input_box">
                                <label>Address <span>*</span></label>
                                <input type="text" name="address">
                            </div>
                            <div class="input_box">
                                <label>Postcode / ZIP <span>*</span></label>
                                <input type="text" name="zip">
                            </div>
                            <div class="margin_between">
                                <div class="input_box space_between">
                                    <label>Phone <span>*</span></label>
                                    <input type="text" name="phone" value="{{ Auth::user()->phone }}">
                                </div>

                                <div class="input_box space_between">
                                    <label>Email address <span>*</span></label>
                                    <input type="email" name="email" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <div class="input_box">
                                <label>Payment Type <span>*</span></label>
                                <select name="payment_type">
                                    <option value="Cash on delivary">Cash on delivary</option>
                                    <option value="Online">Online</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-success" type="submit">Confirm
                                    Rent
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Checkout Area -->
@endsection
