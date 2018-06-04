@extends('layouts.dashboard.dashboard_main')

@section('content_dashboard')

	<div>
		@foreach($recipes as $recipe)
			
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="{{ $recipe->image }}" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">{{$recipe->title}}</h5>
			    <p class="card-text">{{$recipe->description}}</p>
			    <p class="card-text">Grade : {{$recipe->grade}}</p>
			    <p class="card-text">Created at : {{$recipe->created_at}}</p>

			  </div>
			 
			  <div class="card-body">
			    <a href="{{route('recipes.update', $recipe->id)}}" class="card-link btn btn-primary">Update</a>
			    <a href="{{route('recipes.destroy', $recipe->id)}}" class="card-link btn btn-danger">Delete</a>
			  </div>
			</div>
			
		@endforeach
	</div>

@endsection
