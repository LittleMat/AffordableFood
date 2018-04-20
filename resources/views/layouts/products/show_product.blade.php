@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
				<h1>{{$product->name}}</h1> <br>

				<p>Description : {{$product->description}} </p>
				
				<p>Brand : {{$brand_name}}</p>

				<p>Category : {{$category_name}}</p>
				
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
					method="POST" 
					class="inline-block"
					onsubmit="return confirm('Are you sure?')";
				>
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<input type="submit" name="" value="Update" class="btn btn-light">
				</form>
			</div>
		</div>
	</div>
	
		
@stop