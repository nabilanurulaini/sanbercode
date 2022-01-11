@extends('adminlte.master')

@section('content')
<h2>Tambah Data</h2>
<form action="/genre" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nama Genre</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Genre">
        @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Deskripsi</label>
        <textarea name="description"  class="form-control" id="description" cols="50" rows="10"></textarea>
        @error('description')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection