@extends('layout.master')
@section('title')
    Film
@endsection
@section('content')

<a href="/film/create" class="btn btn-primary mb-2">Add</a>
<div class="row">
    @forelse ($film as $item)
    <div class="col-2">
        <div class="card" >
            <img src="{{asset('images/'.$item->poster)}}"  alt="{{$item->judul}}">
            <div class="card-body">
                <h5 class="card-title">{{$item->judul}}</h5>
                <p class="card-text">{{$item->ringkasan}}</p>


            <a href="/film/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
            <form action="/film/{{$item->id}}" style="display: inline" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger my-1" value="Delete">
            </form>
            <a href="/film/{{$item->id}}" class="btn btn-success mt-2">Read More</a>
            </div>
        </div>
    </div>
    @empty
        No Film

    @endforelse
</div>
@endsection
