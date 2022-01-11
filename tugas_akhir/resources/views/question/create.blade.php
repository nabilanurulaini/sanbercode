@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New Question</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/question" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value=" {{ old('title', '')}}" placeholder="Enter Title">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                  <div class="form-group">
                    <label for="content">Content</label>
                    <textarea type="text" class="form-control" id="content" name="content" value=" {{ old('content', '')}}" placeholder="Enter content"></textarea>
                    @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="img">Img</label>
                    <input type="file" class="form-control" id="img" name="img" >
                    @error('img')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                <div class="form-group">
                <label>Genre</label>
                <select id="genres_id" name="genres_id" class="form-control">                    					
				          <option value="">--Silahkan Pilih Genre--</option>
                  @foreach ($genre as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                  </select>
                  @error('genres_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                 </div>
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>

</div>

@endsection