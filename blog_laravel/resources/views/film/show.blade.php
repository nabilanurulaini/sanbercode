@extends('layout.master')
@section('title')
{{$film->judul}}
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card" >
            <img src="{{asset('images/'.$film->poster)}}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{$film->judul}}</h5>
                <p class="card-text">{{Str::limit($film->ringkasan, 50)}}</p>

            <a href="/film" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    {{-- @if($item->id == $genre->genre_id)
        <option value="{{$item->id}}" selected>{{$item->nama}}</option>

    @else
        <option value="{{$item->id}}">{{$item->nama}}
    @endif --}}
</div>
@endsection
