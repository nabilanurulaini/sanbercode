@extends ('adminlte.master')

@section('content')
@auth
<a href="/question/create" class="btn btn-primary btn-sm my-2">Tambah </a>
@endauth

<div class="row">
  @forelse ($question as $item)
  <div class="col-4 m-4">
    <div class="card">
      <img src="{{asset('gambar/'.$item->img)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$item->title}}</h5>
        <p class="card-text">{{Str::limit($item->content, 20)}}</p>
       
       <form action="/question/{{$item->id}}" method="POST">
         @method('DELETE')
         @csrf
         <a href="/question/{{$item->id}}" class="btn btn-primary btn-sm">Read more</a>
         <a href="/question/{{$item->id}}/edit" class="btn btn-info btn-sm">Edit</a>
         <input type="submit" class="btn btn-danger btn-sm" value="DELETE">
       </form> 
       
      </div>
  </div>
</div>
@empty
<h5>Tidak Ada Question</h5>
@endforelse
</div>
@endsection