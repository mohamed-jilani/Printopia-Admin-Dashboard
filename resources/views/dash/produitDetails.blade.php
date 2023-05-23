
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
        <h3>produits numero: {{$prod->id}}</h3>
        <ul class="list-group list-group-flush mx-auto" style="display:block;background-color:transparent;width:600px;">
            <li class="list-group-item">Type : {{$prod->Type->Type}}</li>
            <li class="list-group-item">quantity: {{$prod->qttProduit}}</li>
            <li class="list-group-item">Price: {{$prod->prixProduit}}$</li>
            <li class="list-group-item">description: {{$prod->description}}</li>
            <img src="{{ asset('storage/' . $prod->image) }}" alt="Product Image">


        </ul>
    </div>

    
    @endsection

      @section('scripts')

      @endsection
