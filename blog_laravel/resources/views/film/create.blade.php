@extends('layout.master')
@section('title')
Add FIlm
@endsection
@section('content')
{{-- //enctype supaya file-file yg diupload bisa masul --}}
<form action="/film" method="POST" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
        <label >Title</label>
        <input type="text" class="form-control" name="judul"  placeholder="Please insert title">
        @error('judul')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="body">Summary</label>
        <textarea class="form-control" name="ringkasan" placeholder="Please insert summary of film" ></textarea>
        @error('ringkasan')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="body">Year</label>
        <input type="text" class="form-control" name="tahun" placeholder="Please insert year">
        @error('tahun')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="body">Year</label>
        <input type="file" class="form-control" name="poster">
        @error('poster')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="body">Genre</label>
        <select class="form-control" name="genre_id">
            <option>--Choose genre--</option>
            @foreach ($genre as $item)
                <option value="{{$item->id}}">{{$item->nama}}</option>
            @endforeach
        </select>
        @error('genre_id')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
