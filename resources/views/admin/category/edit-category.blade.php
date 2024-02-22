@extends('admin.master')
@section('header')
Edit Category
@endsection
@section('content')
    <form action="{{ url('update-category/'.$category->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" rows="3" name="description">{{ $category->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="checkbox" {{ $category->status == 1?'checked':'' }} name="status">
        </div>
        <button type="submit" class="mt-5 btn btn-primary btn-block">Update</button>
    </form>
@endsection
