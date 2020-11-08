@extends('index')
@section('content')

<div id="app">
	<app></app>
</div>

{{ $products->links('vendor.pagination.bootstrap-4') }}
@endsection