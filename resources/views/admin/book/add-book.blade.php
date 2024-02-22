@extends('admin.master')
@section('header')
Add Book
@endsection
@section('content')
<div class="col-md-3"></div>
<div class="col-md-6">
    <form action="{{ url('insert-book') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <select class="form-control form-select" name="cat_id">
                <option value="">Select a Category</option>
                @foreach ($category as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Author Name</label>
            <input type="text" class="form-control" name="author_name">
        </div>
        <div class="form-group">
            <label>Short Description</label>
            <textarea class="form-control" rows="3" name="short_description"></textarea>
        </div>
        <div class="form-group">
            <label>Short Description</label>
            <textarea class="form-control" rows="5" name="long_description"></textarea>
        </div>
        <div class="form-group">
            <label>Original Price</label>
            <input type="text" class="form-control" name="original_price">
        </div>
        <div class="form-group">
            <label>Selling Price</label>
            <input type="text" class="form-control" name="selling_price">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" name="qty">
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="checkbox" name="status">
        </div>
        <div class="form-group">
            <label>Trending</label>
            <input type="checkbox" name="trending">
        </div>
        <button type="submit" class="mt-5 btn btn-primary btn-block">Save</button>
    </form>
</div>
<div class="col-md-3"></div>
@endsection
