@extends('layout.master')
@section('title')
Add Cast
@endsection
@section('content')

<form action="/cast" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label >Name</label>
        <input type="text" class="form-control" name="nama"  placeholder="Please insert cast name">
        @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="body">Age</label>
        <input type="text" class="form-control" name="umur" placeholder="Please insert cast age">
        @error('umur')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="body">Bio</label>
        <textarea class="form-control" name="bio" placeholder="Please insert cast bio" ></textarea>
        @error('bio')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
