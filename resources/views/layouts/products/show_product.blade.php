@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-6">

				<h1>{{$product->prod_name}}</h1> <br>

				<p>Description : {{$product->description}} </p>
				
				<p>Brand : {{$product->brand_name}}</p>

				<p>Category : {{$product->cat_name}}</p>
				
				<p>Grade : {{$product->grade}}</p>

				<p><a href="{{ route('products.index')}}"> Back </a> </p>

				<form 
					action="{{route('products.destroy', $product->id)}}" 
					method="POST" 
					class="inline-block"
					onsubmit="return confirm('Are you sure?')";
				>
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<input type="submit" name="" value="Delete" class="btn btn-danger">
				</form>

				<form 
					action="{{route('products.edit', $product->id)}}" 
					method="GET" 
					class="inline-block"
				>
					{{ csrf_field() }}
					<input type="submit" name="" value="Update" class="btn btn-light">
				</form>
			</div>


			<div class="col-lg-6">

				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Supermarket</th>
				      <th scope="col">Price</th>
				      <th scope="col">Quantity</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($supermarket_info as $info)
				    <tr>
				      <th scope="row">{{$info->Name}}</th>
				      <td>{{$info->price}}</td>
				      <td>{{$info->quantity}}{{$info->measure_type}}</td>
				    </tr>
				    @endforeach
				  </tbody>
				</table>
				

			</div>
		</div>
	</div>
</div>
	
		
@stop