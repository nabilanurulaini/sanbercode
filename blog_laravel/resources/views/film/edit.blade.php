@extends('layout.master')
@section('title')
Edit FIlm {{$film->id}}
@endsection
@section('content')
{{-- //enctype supaya file-file yg diupload bisa masul --}}
<form action="/film/{{$film->id}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="form-group">
        <label >Title</label>
        <input type="text" class="form-control" name="judul" value="{{$film->judul}}"  placeholder="Please insert title">
        @error('judul')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="body">Summary</label>
        <textarea class="form-control" name="ringkasan" value="{{$film->ringkasan}}" placeholder="Please insert summary of film" ></textarea>
        @error('ringkasan')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="body">Year</label>
        <input type="text" class="form-control" name="tahun" value="{{$film->tahun}}" placeholder="Please insert year">
        @error('tahun')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="body">Year</label>
        <input type="file" class="form-control" name="poster" value="{{$film->poster}}">
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
                @if ($item->id === $film->genre_id)
                    <option value="{{$item->id}}" selected>{{$item->nama}}</option>
                @else
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                @endif
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
