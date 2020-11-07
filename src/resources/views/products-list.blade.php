@extends('index')
@section('content')
<div class="col-12">
	<div class="form-group row">
    	<input type="text" placeholder="Enter the Title of the product" class="form-control mb-1">
      <button class="btn btn-sm btn-primary m-auto w-75">Search</button>
  	</div>
</div>

<div id="app" class="mb-3 text-center row">

  <products-list></products-list>

</div>

{{ $products->links('vendor.pagination.bootstrap-4') }}
@endsection