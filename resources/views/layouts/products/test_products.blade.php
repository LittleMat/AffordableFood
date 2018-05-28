@extends('layouts.app')

@section('content')


        @include('layouts/products/_productnav')  


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          	<!-- maincontent stuff here -->


          	<div class="container">
		    <h1>List of products</h1>

			<form action="{{action('ProductController@index')}}", method="GET" role="search">
			    <input type="text" class="form-control" name="q" placeholder="productname">
			</form>

			<hr>

			<table class="table table-bordered">
				
				<thead>
					<tr>
						<th></th>
						<th>Product Name</th>
						<th>Product Description</th>
						<th>Cheapest Price</th>
						<th>Supermarket</th>
					</tr>
				</thead>

				<tbody>

					@foreach($products as $product)
					
						@php
							$prices=array();
						@endphp

					<tr>
						<td>
							
							<img src="{{ ($product->photo) }}" class="productimages" />
						</td>
						<td><a href="{{ route('products.show', $product->id)}}" class="product">
							{{$product->name}}</a>
						</td>
						<td>{{$product->description}}</td>
						<td>
							@foreach($supermarket_info as $supermarket)
								@if($supermarket->product_id===$product->id)
									<?php
										$prices[] = $supermarket->price;
									?>
								@endif
							@endforeach
							@php
								echo min($prices);
								$p= min($prices);
							@endphp
						</td>
						<td>
							@foreach($supermarket_info as $supermarket)
								@if($supermarket->product_id===$product->id AND $supermarket->price===$p)
									{{$supermarket->Name}} 
									<br>
								@endif
							@endforeach
						</td>
					@endforeach

			<table>

			{{ $products->links() }}
			
			<br>

			</div>
			<br>
			<br>
			<a href="{{route('products.create')}}">Add a product</a>
			</div>
		</div>
			<!-- maincontent -->
          </div>
        </main>
      </div>
    </div>

@stop