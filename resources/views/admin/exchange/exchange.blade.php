@extends('admin.master')
@section('header')
Exchanges
@endsection
@section('content')
<div class="col-md-12">
    <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Username</th>
            <th scope="col">Book Name</th>
            <th scope="col">Book Image</th>
            <th scope="col">Phone</th>
            <th scope="col">Adress</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($exchanges as $item)
              <tr>
                <td>{{ $loop ->index+1 }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->book_name }}</td>
                <td><img src="{{ asset('assets/uploads/exchanges/'.$item->image) }}" style="height: 50px; width: 40px" /></td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->address }}</td>
                <td>
                    <nobr>
                    <a href="{{ url('delete-exchange/'.$item->id) }}" class="btn btn-sm btn-danger"
                        onclick="alert('Are you sure, you whant to delete this record??')"
                        >Delete</a>
                    </nobr>
                </td>
              </tr>
             @endforeach
        </tbody>
    </table>
</div>
@endsection

