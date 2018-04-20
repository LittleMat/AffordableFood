@extends('layouts.app')

@section('content')

<div class="container">
	<h1>All products</h1>
	<br>
	<div class="row">
			@foreach($products as $product)
				<a href="{{ route('products.show', $product->id)}}" class="col-lg-4 btn btn-light">
					<div>
						<h2>{{$product->name}}</h2>
						<p>{{$product->description}}</p>	
					</div>						
				</a>			
			@endforeach

			<br>

	</div>
	<br>
	<br>
	<a href="{{route('products.create')}}">Add a product</a>

</div>

@stop