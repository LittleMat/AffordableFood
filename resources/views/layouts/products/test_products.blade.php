@extends('layouts.app')

@section('content')

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Product Categories</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Search</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Bread <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Fruits
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Meat
                </a>
              </li>
            </ul>
          </div>
        </nav>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          	<!-- maincontent stuff here -->
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
		</div>
			<!-- maincontent -->

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
          </div>
        </main>
      </div>
    </div>

@stop