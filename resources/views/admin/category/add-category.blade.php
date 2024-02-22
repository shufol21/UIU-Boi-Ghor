@extends('admin.master')
@section('header')
Add Category
@endsection
@section('content')
<div class="col-md-3"></div>
<div class="col-md-6">
    <form action="{{ url('insert-category') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" rows="3" name="description"></textarea>
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="checkbox" name="status">
        </div>
        <button type="submit" class="mt-5 btn btn-primary btn-block">Save</button>
    </form>
</div>
<div class="col-md-3"></div>
@endsection
