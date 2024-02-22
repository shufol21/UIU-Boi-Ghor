@extends('admin.master')
@section('header')
Rent View
@endsection
@section('content')
    <div class="col-md-5">
        <h1>Shipping Details</h1><hr/>
            <div class="form-group">
              <label>Name</label>
              <input class="form-control" type="text" value="{{ $rent->name }}">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input class="form-control" type="email" value="{{ $rent->email }}">
            </div>
            <div class="form-group">
              <label>Contact No.</label>
              <input class="form-control" type="phone" value="{{ $rent->phone }}">
            </div>
            <div class="form-group">
                <label>Shipping Address</label>
              <textarea class="form-control">{{ $rent->address }}"</textarea>
            </div>
            <div class="form-group">
                <label>Zip Code</label>
                <input class="form-control" type="text" value="{{ $rent->zip }}">
              </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-5">
        <h1>Rent Details</h1><hr/>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{ $rent->books->name }}</th>
                    <td>{{ $rent->price }}</td>
                    <td><img src="{{ asset('assets/uploads/books/'.$rent->books->image) }}" style="height: 50px; width: 40px" /></td>
                  </tr>
            </tbody>
          </table>\
          <h3>Grand Total= </h3> <span>Tk. {{ $rent->price }}</span>
          <div class="mt-4">
            <form action="{{ url('update-rent') }}" method="POST">
                @csrf
              <div class="form-group">
                <select class="form-control" name="status">
                  <option value="0" {{ $rent->status == '0' ? 'selected':'' }}>Pending</option>
                  <option value="1" {{ $rent->status == '1' ? 'selected':'' }}>Delivired</option>
                </select>
              </div>
              <input type="hidden"  value="{{ $rent->id }}" name="id">
              <input type="submit" class="btn btn-primary" value="update">
            </form>
          </div>
    </div>
@endsection
