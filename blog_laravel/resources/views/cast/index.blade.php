@extends('layout.master')
@section('title')
Show Cast
@endsection
@section('content')
<a href="/cast/create" class="btn btn-primary mb-2">Add</a>
<table class="mt-2 table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Bio</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key=>$value)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$value->nama}}</td>
                <td>{{$value->umur}}</td>
                <td>{{$value->bio}}</td>
                <td>
                    <a href="/cast/{{$value->id}}" class="btn btn-info">Show</a>
                    <a href="/cast/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="/cast/{{$value->id}}" style="display: inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" value="Delete">
                    </form>
                </td>
            </tr>
        {{-- if there's no data anymore then  --}}
        @empty
            <tr colspan="3">
                <td>No data</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
