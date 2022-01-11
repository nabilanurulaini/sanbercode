@extends('adminlte.master')

@section('content')
<h2>Detail Genre {{$genre->id}}</h2>
<h4>{{$genre->name}}</h4>
<p>{{$genre->description}}</p>
@endsection