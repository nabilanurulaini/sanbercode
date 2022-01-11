@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/profile/{{$profile->id}}" method="POST">
                @csrf
                @put('put')
                  <div class="form-group">
                    <label for="bio">Bio</label>
                    <input type="text" class="form-control" id="bio" name="bio" value=" {{ $profile->bio }}" placeholder="Enter Bio">
                    @error('bio')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                  <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" value=" {{ $profile->age}}" placeholder="Enter Age">
                    @error('age')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$profile->address}}" placeholder="Enter Profile">
                    @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>

</div>

@endsection
