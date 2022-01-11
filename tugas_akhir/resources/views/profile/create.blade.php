@extends('layout.master')

@section('content')
<div class="ml-3 mt-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/profile" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="profile_name">Name</label>
                    <input type="text" class="form-control" id="profile_name" name="profile_name" value=" {{ old('profile_name', '')}}" placeholder="Enter Profile">
                    @error('profile')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <div class="form-group">
                    <label for="bio">Bio</label>
                    <input type="text" class="form-control" id="bio" name="bio" value=" {{ old('bio', '')}}" placeholder="Enter Bio">
                    @error('bio')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value=" {{ old('email', '')}}" placeholder="Enter Email">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" value=" {{ old('age', '')}}" placeholder="Enter Age">
                    @error('age')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value=" {{ old('address', '')}}" placeholder="Enter Profile">
                    @error('address')
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
