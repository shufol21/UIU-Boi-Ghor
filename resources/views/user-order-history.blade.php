@extends('master')
@section('content')
<!-- Start breadcrumb area -->
<div class="ht__breadcrumb__area bg-image--4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__inner text-center">
                    <h2 class="breadcrumb-title">Order History</h2>
                    <nav class="breadcrumb-content">
                        <a class="breadcrumb_item" href="{{ url('/') }}">Home</a>
                        <span class="brd-separator">/</span>
                        <span class="breadcrumb_item active">Order History</span>
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
            <div class="col-lg-12 col-12">
                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Tracking No.</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Payment Type</th>
                        <th scope="col">Order Status</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $items)
                      <tr>
                        <th scope="row">{{ $items->id }}</th>
                        <td>{{ $items->traking_no }}</td>
                        <td>{{ $items->total_price }}</td>
                        <td>{{ $items->payment_type }}</td>
                        <td>{{ $items->status == '1' ? 'Completed':'Pending' }}</td>
                        <td>{{ $items->created_at }}</td>
                        <td>
                            <a href="{{ url('user-invoice/'.$items->id) }}" target="_blank" class="btn btn-sm btn-primary">View Invoice</a>
                            <a href="{{ url('download-user-invoice/'.$items->id) }}" class="btn btn-sm btn-warning">Download Invoice</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
