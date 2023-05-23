
    @extends('dash.layouts.master')
    @section('title')
    USER
    @stop

    @section('css')
    @endsection

    @section('content')

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Name</th>
                      <th>Last name</th> 
                      <th>email</th>
                      <th>role</th> 
                      <th>phone</th> 
                      <th>postalZip</th> 
                      <th>Delete</th>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                      <tr onclick='window.location.href="userDetails/{{$user->id}}"'>
                      <td>{{$user->firstName}} </td>
                      <td>{{$user->lastName}}</td> 
                      <td><a href="mailto:{{$user->email}}"> {{$user->email}}</a></td>
                      <td>{{$user->role}}</td> 
                      <td>{{$user->phone}}</td> 
                      <td>{{$user->postalZip}}</td>
                      <td><a onclick="return confirm('Are you sure you want to delete?')" href="/userDelete/{{$user->id}}"><i class="fa fa-trash"></i></a></td> 
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  {{$users->links()}}

                </div>
              </div>
            </div>
          </div>
        </div>
      
          
    @endsection

  @section('scripts')

  @endsection
