@extends('layouts.dashboard.dashboard_main')

@section('content_dashboard')

	<div>
			<div class="wrapper">
		      	<div class="pricing-table">
					@foreach($recipes as $recipe)
			        	<div class="pricing-box">
						    <a href="{{ route('recipes.show', $recipe->id)}}" class="col-lg-12 btn btn-light">
						  		<div>
						  			<h2>{{$recipe->title}}</h2>
						  		</div>						
						  	</a>
					        
			                @if(null !== $recipe->image)
							    <img src="{{ asset('image/'.$recipe->image) }} " alt="Image" class="img-fluid vertical-center productimages" style=" max-height:350px; width: auto; ">
			                @else
						        <img src="{{ asset('image/No_Image_Available.png') }}" alt="No image" class="img-fluid vertical-center productimages" style=" max-height:350px; width: auto; ">        
						    @endif 

					       
							<span class="pricing-table-divider"></span>
							<p class="card-text">Created at : {{$recipe->created_at}}</p>
							<span class="pricing-table-divider"></span>
							<div class="card-body">
							  <a href="{{route('recipes.update', $recipe->id)}}" class="card-link btn btn-primary">Update</a>
							  <a href="{{route('recipes.destroy', $recipe->id)}}" class="card-link btn btn-danger">Delete</a>
							</div>

						</div>
						
					@endforeach
				</div>
			</div>
	</div>

@endsection
