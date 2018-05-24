@extends('layouts.recipes.index')

@section('recipe.index.connected')
	<a href="{{route('recipes.create')}}" class="btn btn-lg btn-block btn-primary">Create a new recipe</a>
@endsection
