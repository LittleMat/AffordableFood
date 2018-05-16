@extends('layouts.app')

@section('content')


        @include('layouts/products/_productnav')  


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          	<!-- maincontent stuff here -->
          	<div class="container">
		    <h1>All products</h1>
			<br>
					@foreach($products as $product)
						<a href="{{ route('products.show', $product->id)}}" class="product">
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
		</div>
			<!-- maincontent -->

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
          </div>
        </main>
      </div>
    </div>

@stop