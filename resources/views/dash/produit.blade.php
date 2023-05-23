
@extends('dash.layouts.master')
@section('title')
Produits
@stop


@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h4 class="card-title"> produits</h4></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>id</th>
                <th>type</th> 
                <th>qtt</th> 
                <th>prix</th> 
                <th>description</th> 
                <th>Delete</th>
              </thead>
              <tbody>
              @foreach ($prods as $prod)
                <tr onclick="window.location.href='produitsdetails/{{$prod->id}}'">
                <td>{{$prod->id}}</td>
                <td>{{$prod->Type->Type}}</td>
                <td>{{$prod->qttProduit}}</td>
                <td>{{$prod->prixProduit}}</td>
                <td>{{$prod->description}}</td>
                <td><a href="/deleteProduit/{{$prod->id}}"><i class="fa fa-trash"></i></a></td> 
                </tr>
              @endforeach
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>


@endsection

  