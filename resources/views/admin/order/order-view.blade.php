@extends('admin.master')
@section('header')
Order View
@endsection
@section('content')
    <div class="col-md-5">
        <h1>Shipping Details</h1><hr/>
            <div class="form-group">
              <label>Name</label>
              <input class="form-control" type="text" value="{{ $orders->name }}">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input class="form-control" type="email" value="{{ $orders->email }}">
            </div>
            <div class="form-group">
              <label>Contact No.</label>
              <input class="form-control" type="phone" value="{{ $orders->phone }}">
            </div>
            <div class="form-group">
                <label>Shipping Address</label>
              <textarea class="form-control">{{ $orders->shipping_address }}"</textarea>
            </div>
            <div class="form-group">
                <label>Zip Code</label>
                <input class="form-control" type="text" value="{{ $orders->zip }}">
              </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-5">
        <h1>Order Details</h1><hr/>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($orders->orderItems as $item)
                <tr>
                    <th>{{ $item->books->name }}</th>
                    <td>{{ $item->qty }}</td>
                    <td>{{ $item->price }}</td>
                    <td><img src="{{ asset('assets/uploads/books/'.$item->books->image) }}" style="height: 50px; width: 40px" /></td>
                  </tr>

                @endforeach
            </tbody>
          </table>\
          <h3>Grand Total= </h3> <span>Tk. {{ $orders->total_price }}</span>
          <div class="mt-4">
            <form action="{{ url('update-order') }}" method="POST" style="margin-bottom: 5px">
                @csrf
              <div class="form-group">
                <select class="form-control" name="status">
                  <option value="0" {{ $orders->status == '0' ? 'selected':'' }}>Pending</option>
                  <option value="1" {{ $orders->status == '1' ? 'selected':'' }}>Delivired</option>
                </select>
              </div>
              <input type="hidden" value="{{ $orders->id }}" name="id">
              <input type="submit" class="btn btn-success" value="update">
            </form>
            @if($orders->status == '1')
            <a href="{{ url('admin-invoice/'.$orders->id) }}" target="_blank" class="btn btn-primary" >View Invoice</a>
            <a href="{{ url('download-invoice/'.$orders->id) }}" class="btn btn-warning">Download Invoice</a>
            @else
            @endif
          </div>
    </div>
@endsection
