@extends('admin.master')
@section('header')
Add Audiobook
@endsection
@section('content')
<div class="col-md-3"></div>
<div class="col-md-6">
    <form action="{{ url('insert-audiobook') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Author Name</label>
            <input type="text" class="form-control" name="author_name">
        </div>
        <div class="form-group">
            <label>Audio</label>
            <input type="file" class="form-control" name="file">
        </div>
        <button type="submit" class="mt-5 btn btn-primary btn-block">Save</button>
    </form>
</div>
<div class="col-md-3"></div>
@endsection
