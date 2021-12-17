@extends('layout.master')
@section('title')
Edit Cast {{$cast->nama}}
@endsection
@section('content')
<form action="/cast/{{$cast->id}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label >Name</label>
        <input type="text" class="form-control" value= "{{$cast->nama}}" name="nama"  placeholder="Please insert cast name">
        @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="body">Age</label>
        <input type="text" class="form-control" value= "{{$cast->umur}}" name="umur" placeholder="Please insert cast age">
        @error('umur')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="body">Bio</label>
        <textarea class="form-control" name="bio" placeholder="Please insert cast bio"> {{$cast->bio}}</textarea>
        @error('bio')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
