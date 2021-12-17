@extends('layout.master')
@section('title')
{{$cast->nama}} Details
@endsection
@section('content')

    <h2>Name : {{$cast->nama}}</h2>
    <h4>Age : {{$cast->umur}}</h4>
    <p>Bio : {{$cast->bio}}</p>
@endsection
