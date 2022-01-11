@extends('adminlte.master')

@section('content')
<a href="/genre/create" class="btn btn-primary mb-3">Tambah</a>
<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Genre</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($genre as $key=>$value)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->description}}</td>
                <td style="display: flex;">
                    <a href="/genre/{{$value->id}}" class="btn btn-info">Show</a>
                    <a href="/genre/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="/genre/{{$value->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <tr colspan="3">
                <td>No data</td>
            </tr>  
        @endforelse              
    </tbody>
</table>
@endsection