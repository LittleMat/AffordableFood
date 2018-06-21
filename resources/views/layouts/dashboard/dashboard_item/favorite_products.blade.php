@extends('layouts.dashboard.dashboard_main')

@section('content_dashboard')

	<div>
		<div class="row">

			@foreach($favorite_products as $favorite_product)
					<div class="col-lg-3 end_row">
						<div class="row ">
							<img src="{{ asset('image/products/'.$favorite_product->photo) }}" class="img-fluid" />
						</div>
						<div class="row">
							    <a href="{{ route('products.show', $favorite_product->id)}}" class="col-lg-12 btn btn-light">
									<h3>{{$favorite_product->name}}</h3>
								</a>
						</div>
						<div class="row">
						   		<a href="{{ route('user.favorite_products.destroy', $favorite_product->id)}}" class="col-lg-12 btn btn-outline-danger">
									<i class="fas fa-trash-alt"></i>
								</a>
						</div>
					</div>
					<div class="col-lg-1">
						
					</div>
			@endforeach
		
		</div>
	</div>

@endsection
					