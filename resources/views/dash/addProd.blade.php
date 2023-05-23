
@extends('dash.layouts.master')
@section('title')
Add Product
@stop

@section('css')
@endsection

@section('content')

      <div class="panel-header panel-header-sm">
      </div>
      <div class="card ">
            <div class="card-header">
                  <h4 class="card-title">add product</h4>
            </div>
        <div class="card-body">
            <form class="container" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                        <label for="qttProduit">Quantity:</label>
                        <input class="form-control" type="number" name="qttProduit" id="qttProduit" required>
                  </div>
                  
                  <div class="form-group">
                        <label for="prixProduit">Price:</label>
                        <input class="form-control" type="number" name="prixProduit" id="prixProduit" required>
                  </div>
                  
                  <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="description" id="description" rows="4" required></textarea>
                  </div>
                  
                  <div class="custom-file">
                        <label class="custom-file-label" for="image">Product Image:</label>
                        <input class="custom-file-input" type="file" name="image" id="image" required>
                  </div>

                  <div class="form-group">
                        <label for="type_id">Product Type:</label>
                        <select class="form-control" name="type_id" id="type_id" required>
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{ $type->Type }}</option>
                            @endforeach
                        </select>
                    </div>

                  <button class="btn btn-primary" type="submit">Create Product</button>
             </form>
        </div>
      </div>


@endsection

  @section('scripts')

  @endsection
