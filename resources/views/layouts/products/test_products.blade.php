@extends('layouts.app')

@section('content')


        @include('layouts/products/_productnav')  


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          	<!-- maincontent stuff here -->


          	<div class="container">
		    <h1>List of products</h1>

			<form class="form-inline" action="{{action('ProductController@index')}}", method="GET" role="search">
				<div class="form-group mx-sm-3 mb-2">
				    <input type="text" class="form-control" id="searchbar" name="q" placeholder="productname">
				    <button type="submit" class="btn btn-success">Search Product</button>
				</div>
			</form>

			<hr>

	@foreach($products as $product)
					
		@php
			$prices=array();
		@endphp
			
	<div class="wrapper">
      	<div class="pricing-table">
        	<div class="pricing-box">
		        <h2><a href="{{ route('products.show', $product->id)}}" class="product">{{$product->name}}</a></h2>
		        <span class="price">
		        			@foreach($supermarket_info as $supermarket)
								@if($supermarket->product_id===$product->id)
									@php
										$prices[] = $supermarket->price;
									@endphp
								@endif
							@endforeach
							@php
								echo min($prices);
								$p= min($prices);
							@endphp
		        </span>
		        <img src="{{ ($product->photo) }}" class="productimages" />
		        <span class="pricing-table-divider"></span>
		        <p class="description">{{$product->description}}</p>
		        <span class="pricing-table-divider"></span>
		        <p class="description">
		        			@foreach($supermarket_info as $supermarket)
								@if($supermarket->product_id===$product->id AND $supermarket->price===$p)
									{{$supermarket->Name}} 
									<br>
								@endif
							@endforeach</p>
	        </div>
	    </div>
	</div>


	@endforeach

			{{ $products->links() }}
			
			<br>

			</div>
			<br>
			<br>
			<a class="btn btn-success"href="{{route('products.create')}}">Add a product</a>
			</div>
		</div>
			<!-- maincontent -->
          </div>
        </main>
      </div>
    </div>

@stop