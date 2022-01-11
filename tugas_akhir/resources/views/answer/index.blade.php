@extends ('adminlte.master')

@section('content')
    <div class="mt-3 ml-3">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Question Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                  @endif
                  <a class="btn btn-primary mb-2" href="/answer/create">Create New answer</a>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Answer</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @forelse($answer as $key => $answer)
                    <tr>
                        <td> {{ $key + 1 }} </td>
                        <td> {{ $answer->answer }} </td>
                    
                        <td style="display: flex;">
                            <a href=" {{ route('answer.show', ['answer' => $answer->id])}} " class="btn btn-info btn-sm">Show</a>
                            <a href="/answer/{{ $answer->id}}/edit" class="btn btn-default btn-sm">Edit</a>
                           <form action="/answer/{{ $answer->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger btn-sm">
                           </form>
                        
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" align="center">No Question</td>
                    </tr>
                    
                   @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
          
            </div>
    </div>
@endsection