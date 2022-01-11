@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New Answer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/answer" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="answer">Answer</label>
                    <input type="text" class="form-control" id="answer" name="answer" value=" {{ old('answer', '')}}" placeholder="Enter Answer">
                    @error('answer')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                <label>Question</label>
                <select id="questions_id" name="questions_id" class="form-control">                    					
				          <option value="">--Silahkan Pilih Genre--</option>
                  @foreach ($question as $item)
                    <option value="{{$item->id}}">{{$item->answer}}</option>
                  @endforeach
                  </select>
                  @error('questions_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                 </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>

</div>

@endsection