@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
				<form action="{{route('products.update', $product->id)}}" method="POST" class="form">
					{{ csrf_field() }}
					{{ method_field("PUT")}}
					
					@include('layouts/products/_form', ['submitButtonText' => "Update the product"])			

				</form>

			</div>
		</div>
	</div>
	
		
@stop