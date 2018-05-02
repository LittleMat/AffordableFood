@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="createproduct">Create a product</h1>

	<form action="{{route('products.store')}}" method="POST">
		{{ csrf_field() }}

		@include('layouts/products/_form', ['submitButtonText' => "Create a product"])	

	<br>

	</div>

@stop