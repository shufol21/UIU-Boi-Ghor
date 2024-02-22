@extends('admin.master')
@section('header')
Pending Orders
@endsection
@section('content')
<a type="button" href="{{ url('order-history') }}" class="btn btn-warning" style="margin-bottom: 10px; float:right">Order History</a>
<div class="col-md-12">
    <table class="table table-bordered table-dark mt-5">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Order Date</th>
            <th scope="col">Tracking No.</th>
            <th scope="col">Total Price</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($orders as $item)
            <tr>
                <td>{{ $loop ->index+1 }}</td>
                <td>{{ date('d-y-m', strtotime($item->created_at)) }}</td>
                <td>{{ $item->traking_no }}</td>
                <td>{{ $item->total_price }}</td>
                <td>{{ $item->status == '0' ? 'Pending':'Completed' }}</td>
                <td>
                    <nobr>
                    <a href="{{ url('view-order/'.$item->id) }}" class="btn btn-sm btn-primary">View</a>
                    </nobr>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
