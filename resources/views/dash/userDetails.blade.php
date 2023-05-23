
@extends('dash.layouts.master')
@section('title')
Users
@stop
@section('css')
@endsection

@section('content')

<div class="panel-header panel-header-sm">      

</div>
    <div class="content">
        <div class="row mb">
            <div class="card">
                <div class="card-header">
                    <h3>Client numero: {{$user->id}}</h3>
                </div>
                <div class="card-body">    
                    <ul class="list-group list-group-flush mx-auto" style="display:block;background-color:transparent;width:600px;">
                        <li class="list-group-item"><b>Name : {{$user->firstName}}</b></li>
                        <li class="list-group-item"><b>Last Name : {{$user->lastName}}</b></li>
                        <li class="list-group-item"><b>Email : {{$user->email}}</b></li>
                        <li class="list-group-item"><b>Phone : {{$user->phone}}</b></li>
                        <li class="list-group-item"><b>Adress : {{$user->adresse}}</b></li>
                        <li class="list-group-item"><b>Postal zip : {{$user->postalZip}}</b></li>
                    </ul>
                </div>
            </div>
        </div>
    
       
    @endsection
