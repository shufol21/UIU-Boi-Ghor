@extends('admin.master')
@section('header')
Audioooks
@endsection
@section('content')
<div class="col-md-12">
    <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Author Name</th>
            <th scope="col">MP3 file</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($audioBooks as $item)
            <tr>
                <td>{{ $loop ->index+1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->author_name }}</td>
                <td>{{ $item->file }}</td>
                <td>
                    <nobr>
                    <a href="{{ url('delete-audiobook/'.$item->id) }}" class="btn btn-sm btn-danger"
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
