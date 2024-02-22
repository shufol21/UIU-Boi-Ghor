@extends('admin.master')
@section('header')
Books
@endsection
@section('content')
<div class="col-md-12">
    <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Category Name</th>
            <th scope="col">Name</th>
            <th scope="col">Author Name</th>
            <th scope="col">Short Description</th>
            <th scope="col">Long Description</th>
            <th scope="col">Selling Price</th>
            <th scope="col">Image</th>
            <th scope="col">Quantity</th>
            <th scope="col">Status</th>
            <th scope="col">Trending</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $item)
            <tr>
                <td>{{ $loop ->index+1 }}</td>
                <td>{{ $item->category->name }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->author_name }}</td>
                <td>{{ $item->short_description }}</td>
                <td>{{ $item->long_description }}</td>
                <td>{{ $item->selling_price }}</td>
                <td><img src="{{ asset('assets/uploads/books/'.$item->image) }}" style="height: 50px; width: 40px" /></td>
                <td>{{ $item->qty }}</td>
                <td>{{ $item->status == TRUE? 'Published':'Unpublished' }}</td>
                <td>{{ $item->trending == TRUE? 'Yes':'No' }}</td>
                <td>
                    <nobr>
                    <a href="{{ url('edit-book/'.$item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ url('delete-book/'.$item->id) }}" class="btn btn-sm btn-danger"
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
