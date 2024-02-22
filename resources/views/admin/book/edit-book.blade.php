@extends('admin.master')
@section('header')
Add Book
@endsection
@section('content')
<div class="col-md-3"></div>
<div class="col-md-6">
    <form action="{{ url('update-book/'.$book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <select class="form-control form-select" name="cat_id">
                <option value="">{{ $book->category->name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $book->name }}">
        </div>
        <div class="form-group">
            <label>Author Name</label>
            <input type="text" class="form-control" name="author_name" value="{{ $book->author_name }}">
        </div>
        <div class="form-group">
            <label>Short Description</label>
            <textarea class="form-control" rows="3" name="short_description">{{ $book->short_description }}</textarea>
        </div>
        <div class="form-group">
            <label>Short Description</label>
            <textarea class="form-control" rows="5" name="long_description">{{ $book->long_description }}</textarea>
        </div>
        <div class="form-group">
            <label>Original Price</label>
            <input type="number" class="form-control" name="original_price" value="{{ $book->original_price }}">
        </div>
        <div class="form-group">
            <label>Selling Price</label>
            <input type="number" class="form-control" name="selling_price" value="{{ $book->selling_price }}">
        </div>
        <div class="form-group">
            <label>Image</label>
            @if ($book->image)
            <img src="{{ asset('assets/uploads/books/'.$book->image) }}" style="height: 50px; width: 40px; margin-bottom:5px" alt=""/>
            @endif
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="number" class="form-control" name="qty" value="{{ $book->qty }}">
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="checkbox" {{ $book->status == 1?'checked':'' }} name="status">
        </div>
        <div class="form-group">
            <label>Trending</label>
            <input type="checkbox" {{ $book->trending == 1?'checked':'' }} name="trending">
        </div>
        <button type="submit" class="mt-5 btn btn-primary btn-block">Update</button>
    </form>
</div>
<div class="col-md-3"></div>
@endsection
