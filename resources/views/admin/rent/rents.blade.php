@extends('admin.master')
@section('header')
Pending Rents
@endsection
@section('content')
<a type="button" href="{{ url('rent-history') }}" class="btn btn-warning" style="margin-bottom: 10px; float:right">Rent History</a>
<div class="col-md-12">
    <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Rent Date</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($rents as $item)
            <tr>
                <td>{{ $loop ->index+1 }}</td>
                <td>{{ date('d-y-m', strtotime($item->created_at)) }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->status == '0' ? 'Pending':'Completed' }}</td>
                <td>
                    <nobr>
                    <a href="{{ url('view-rent/'.$item->id) }}" class="btn btn-sm btn-primary">View</a>
                    </nobr>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
