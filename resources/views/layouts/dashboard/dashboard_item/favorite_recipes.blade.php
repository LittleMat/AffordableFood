@extends('layouts.dashboard.dashboard_main')

@section('content_dashboard')

	<div>
		@foreach($favorite_recipes as $favorite_recipe)
			<div class="col-lg-4">
				<div class="row">
					<a href="{{ route('recipes.show', $favorite_recipe->id)}}" class="col-lg-12 btn btn-light">
						<div>
							<h2>{{$favorite_recipe->title}}</h2>
						</div>						
					</a>
				</div>
				<div class="row">
					<a href="{{ route('user.favorite_recipes.destroy', $favorite_recipe->id)}}" class="col-lg-12 btn btn-outline-danger">
						Un-fav
					</a>
				</div>

			</div>
		@endforeach
	</div>

@endsection
