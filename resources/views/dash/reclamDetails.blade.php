
@extends('dash.layouts.master')
@section('title')
User
@stop
@section('css')
@endsection

@section('content')

    <div class="panel-header panel-header-sm">      
    </div>
    <div class=" ml-5">
        <h3>Reclamation numero: {{$reclam->id}}</h3>
        <ul class="list-group list-group-flush mx-auto" style="display:block;background-color:transparent;width:600px;">
            <li class="list-group-item">Subject : {{$reclam->subject}}</li>
            <li class="list-group-item">Message : {{$reclam->msg}}</li>
            <li class="list-group-item">Client  : <a href="/userDetails/{{$reclam->user->id}}">{{$reclam->user->firstName}}</a></li>
        </ul>
    </div>

    
    @endsection

      @section('scripts')

      @endsection
