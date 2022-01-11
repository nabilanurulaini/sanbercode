@extends ('adminlte.master')



@section('content')
    <div class="mt-3 ml-3">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Profile</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <!-- @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                  @endif -->

                <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
                @foreach ($profile as $object)
                <p class="text-muted text-center">{{ $object->bio }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>{{ $object->age }}</b>
                  </li>
                  <li class="list-group-item">
                    <b>{{Auth::user()->email}}</b>
                  </li>
                  <li class="list-group-item">
                    <b>{{ $object->address }}</b>
                  </li>
                </ul>
                @endforeach
                
                
                <a href="/profile/{{$object->id}}/edit" class="btn btn-primary center"><b>edit</b></a>
              </div>
            
              <!-- /.card-body -->
              <!-- /.card-body -->
          
            </div>
    </div>
@endsection