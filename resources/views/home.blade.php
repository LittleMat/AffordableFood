@extends('layouts.app')

@section('content')

    <header class="py-1 bg-image-full" style="background-image: url('https://superfoodsrx.com/wp-content/uploads/2016/09/Supermarket_shopping_Study.jpg');">
    	<div class="toppadding"></div>
      <img class="img-fluid d-block mx-auto homepage_img1" src="..\image\logo.png" alt="">
      	<div class="bottompadding"></div>
    </header>

    <section class="py-5">
      <div class="container">
      	<div class="centertext">
        <h1>Affordable Food</h1>
        <p class="lead">{{ Lang::get('messages.FindCheap')}}</p>
    	</div>
      </div>
    </section>

    <hr>

    <div class="container-fluid">

	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project wow animated animated4 fadeInLeft">
        <div class="project-hover">
        	<h2>Find cheap Products</h2>
            <hr />
            <p>Here you can find where you can buy the cheapest products in the supermarkets of Horsens</p>
            <a href="{{ route('products.index') }}">Search products</a>
        </div>
    </div>
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-2 wow animated animated3 fadeInLeft">
    	<div class="project-hover">
        	<h2>Inspiration for Recipes</h2>
            <hr />
            <p>Need inspiration? Look through all the recipes submitted by the community</p>
            <a href="{{ route('recipes.index') }}">Look at recipes</a>
        </div>
    </div>
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-3 wow animated animated2 fadeInLeft">
    	<div class="project-hover">
        	<h2>Become a member of the community</h2>
            <hr />
            <p>Register your account for extra features</p>
            <a href="{{ route('register') }}">Make Account</a>
        </div>
    </div>
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-4 wow animated fadeInLeft">
    	<div class="project-hover">
        	<h2>Contact Us</h2>
            <hr />
            <p>Contact us by sending an E-mail</p>
            <a href="#">Send E-mail</a>
        </div>
    </div>
    <div class="clearfix"></div>
</div>


{{-- <section class="py-5">
    <div class="container">
	  <div class="row">
	    <div class="col-sm">
	    	<div class="card homepagecard">
	      		<img class="img-fluid d-block mx-auto homepage_img2" src="http://www.rivieramayagroceries.com/wp-content/uploads/2018/01/gro.jpg" alt="">
  				<div class="card-body">
					<h2 class="card-title">Find products</h2>
					<p class="card-text">Here you can find where you can buy the cheapest products in the supermarkets in Horsens</p>
					<a href="#" class="btn btn-primary">Search products</a>
 				</div>
			</div>
	    </div>
	    
	    <div class="col-sm">
	    	<div class="card homepagecard">
	      	    <img class="img-fluid d-block mx-auto homepage_img2" src="https://i.imgur.com/OSiAMNo.png" alt="">
  				<div class="card-body">
    				<h2 class="card-title">Community</h2>
    				<p class="card-text">Become a member of our community!</p>
    				<a href="#" class="btn btn-primary">Buy membership</a>
				</div>
			</div>
	    </div>
	    
	    <div class="col-sm">
			<div class="card homepagecard">
	      		<img class="img-fluid d-block mx-auto homepage_img2" src="http://www.blackcoffer.com/assets/images/email.png" alt="">
  				<div class="card-body">
    				<h5 class="card-title">Contact</h5>
    				<p class="card-text">Contact us by sending an E-Mail</p>
   					<a href="#" class="btn btn-primary">Contact</a>
  				</div>
			</div>
	    </div>
	  </div>
	</div>
</section> --}}

@endsection
