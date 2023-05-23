
@extends('dash.layouts.master')
@section('title')
Réclammation
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
          <h3>les reclamations</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <th>Subject</th>
                <th>Owner</th>
                <th>Delete</th>
                <th>Contact</th>
              </thead>
              <tbody>
                @foreach ($reclams as $reclam)
                <tr onclick='window.location.href="reclamDetails/{{$reclam->id}}"'>
                  <td>{{$reclam->id}}</td> 
                  <td>{{$reclam->subject}}</td> 
                  <td><a href="userDetails/{{$reclam->user->id}}">{{$reclam->user->firstName}}</a></td>  
                  <td><a href="/reclamDelete/{{$reclam->id}}"><i class="fa fa-trash"></i></a></td>
                  <td><a href="mailto:{{$reclam->user->email}}"><i class="fa fa-envelope"></i></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

  @section('scripts')

  @endsection
