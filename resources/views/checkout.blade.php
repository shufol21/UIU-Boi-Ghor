@extends('master')
@section('content')
     <!-- Start breadcrumb area -->
     <div class="ht__breadcrumb__area bg-image--4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__inner text-center">
                        <h2 class="breadcrumb-title">Checkout</h2>
                        <nav class="breadcrumb-content">
                            <a class="breadcrumb_item" href="index.html">Home</a>
                            <span class="brd-separator">/</span>
                            <span class="breadcrumb_item active">Checkout</span>
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
                        <h3 class="order__title">Your order</h3>
                        <ul class="order__total">
                            <li>Book</li>
                            <li>Total</li>
                        </ul>
                        <ul class="order_product">
                            @foreach ($cart as $item)
                            <li>{{ $item->books->name }} × {{ $item->qty }}<span>Tk.{{ $item->books->selling_price*$item->qty }}</span></li>
                            @endforeach
                        </ul>
                        @php
                        $subtotal = 0;
                       @endphp
                       @foreach($cart as $item)
                       @php
                          $subtotal = $subtotal + $item->books->selling_price*$item->qty;
                       @endphp
                      @endforeach
                        <ul class="shipping__method">
                            <li>Cart Subtotal <span>Tk. {{ $subtotal }}</span></li>
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
                        @php
                            $grandtotal = $subtotal+50;
                        @endphp
                        <ul class="total__amount">
                            <li>Order Total <span>Tk. {{ $grandtotal }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="customer_details">
                        <h3>Billing details</h3>
                        <form action="{{ url('confirm-order') }}" method="POST">
                            @csrf
                        <div class="customar__field">
                                <div class="input_box">
                                    <label>Name <span>*</span></label>
                                    <input type="text" name="name" value="{{ Auth::user()->name }}">
                                    <input type="hidden" name="total_price" value="{{ $grandtotal }}">
                                </div>
                            <div class="input_box">
                                <label>Address <span>*</span></label>
                                <input type="text" name="address">
                            </div>
                            <div class="input_box">
                                <label>Shipping Address <span>*</span></label>
                                <input type="text" name="shipping_address">
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
                                    Order
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
