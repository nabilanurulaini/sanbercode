@extends('adminlte.master')

@section('content')
<h2>Edit Genre {{$genre->id}}</h2>
<form action="/genre/{{$genre->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Nama genre</label>
        <input type="text" class="form-control" name="name" value="{{$genre->name}}" id="name" placeholder="Masukkan Genre">
        @error('title')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Deskripsi</label>
        <textarea name="description"  class="form-control" value="{{$genre->description}}" id="description" cols="50" rows="10"></textarea>
        @error('description')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>
@endsection