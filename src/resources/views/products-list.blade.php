@extends('index')
@section('content')
<div class="col-12">
	<div class="form-group row">
    	<input type="text" placeholder="Enter the Title of the product" class="form-control mb-1">
      <button class="btn btn-sm btn-primary m-auto w-75">Search</button>
  	</div>
</div>

<div class="mb-3 text-center row">
  @foreach($products as $product)
  <div class="card col-md-4 mb-4 shadow-sm p-0 mb-1">
    <div class="card-header">
      <h4 class="my-0 font-weight-normal">{{ $product->title }}</h4>
    </div>
    <div class="card-body">
      <h3>Product ID: {{ $product->id }}</h3>
      <h1 class="card-title pricing-card-title">${{ $product->price->price }}</h1>
      <button type="button" class="btn btn-lg btn-block btn-outline-primary">Buy</button>
    </div>
  </div>
  @endforeach
</div>

{{ $products->links('vendor.pagination.bootstrap-4') }}
@endsection