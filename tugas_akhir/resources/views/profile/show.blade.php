@extends('adminlte.master')

@section('content')
<div class="mt-3 ml-3">
    <p> {{ $profile-> age}} </p>
    <p> {{ $profile-> address}} </p>
</div>
   
@endsection