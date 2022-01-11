@extends ('adminlte.master')

@section('title')
  Detail Question {{$question->title}}
@endsection

@section('content')

<div class="row">
  <div class="col-12">
      <img src="{{asset('gambar/'.$question->img)}}">
      <div class="card-body">
        <h5 class="card-title">{{$question->title}}</h5>
        <p class="card-text">{{$question->content}}</p>
  </div>
</div>
</div>

<a href="/question" class="btn btn-primary btn-sm my-2">Kembali</a>
@endsection