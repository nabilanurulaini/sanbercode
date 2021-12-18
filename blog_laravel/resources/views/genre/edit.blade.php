@extends('layout.master')
@section('title')
Edit Genre {{$genre->nama}}
@endsection
@section('content')
<form action="/genre/{{$genre->id}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label >Name</label>
        <input type="text" class="form-control" value= "{{$genre->nama}}" name="nama"  placeholder="Please insert genre name">
        @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
