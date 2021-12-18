@extends('layout.master')
@section('title')
Add Genre
@endsection
@section('content')
<form action="/genre" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="nama"  placeholder="Please insert genre name">
        @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
