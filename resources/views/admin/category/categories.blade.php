@extends('admin.master')
@section('header')
Categories
@endsection
@section('content')
<div class="col-md-12">
    <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($category as $item)
              <tr>
                <td>{{ $loop ->index+1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->status == TRUE? 'Published':'Unpublished' }}</td>
                <td>
                    <nobr>
                    <a href="{{ url('edit-category/'.$item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-sm btn-danger"
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
