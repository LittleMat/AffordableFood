@extends('layouts.dashboard.dashboard_main')

@section('content_dashboard')

	<div class="col-lg-12">
			<div class="row">
				@foreach($favorite_recipes as $favorite_recipe)
					<div class="col-lg-3 end_row">
						<div class="row ">
                                @if(null !== $favorite_recipe->image)
								    <img src="{{ asset('image/'.$favorite_recipe->image) }}" alt="Image" class="img-fluid vertical-center" style=" max-height:350px; width: auto; ">
                                @else
							        <img src="{{ asset('image/No_Image_Available.png') }}" alt="No image" class="img-fluid vertical-center" style=" max-height:350px; width: auto; ">        
							    @endif      
						</div>
						<div>
							    <a href="{{ route('recipes.show', $favorite_recipe->id)}}" class="col-lg-12 btn btn-light">
							  		<div>
							  			<h2>{{$favorite_recipe->title}}</h2>
							  		</div>						
							  	</a>
						</div>
						<div>
						   		<a href="{{ route('user.favorite_recipes.destroy', $favorite_recipe->id)}}" class="col-lg-12 btn btn-outline-danger">
								  <span class="align-middle">Un-fav</span>
								</a>
						</div>
					</div>
					<div class="col-lg-1">
						
					</div>
					<br>
					<br>

				@endforeach
			</div>
	</div>

@endsection





  
