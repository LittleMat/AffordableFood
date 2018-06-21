@extends('layouts.dashboard.dashboard_main')

@section('content_dashboard')

	<div class="col-lg-12">
			<div class="row">
					<div class="wrapper">
				      	<div class="pricing-table">
							@foreach($favorite_recipes as $favorite_recipe)
						        	<div class="pricing-box">
									    <a href="{{ route('recipes.show', $favorite_recipe->id)}}" class="col-lg-12 btn btn-light">
									  		<div>
									  			<h2>{{$favorite_recipe->title}}</h2>
									  		</div>						
									  	</a>
								        
                                        @if(null !== $favorite_recipe->image)
        								    <img src="{{ asset('image/'.$favorite_recipe->image) }} " alt="Image" class="img-fluid vertical-center productimages" style=" max-height:350px; width: auto; ">
                                        @else
        							        <img src="{{ asset('image/No_Image_Available.png') }}" alt="No image" class="img-fluid vertical-center productimages" style=" max-height:350px; width: auto; ">        
        							    @endif 

								        <span class="pricing-table-divider"></span>
								        <a href="{{ route('user.favorite_recipes.destroy', $favorite_recipe->id)}}" class="col-lg-12 btn btn-outline-danger">
										  <span class="align-middle">Un-fav</span>
										</a>
									</div>
							@endforeach
						</div>


					</div>
			</div>
	</div>

@endsection





  
