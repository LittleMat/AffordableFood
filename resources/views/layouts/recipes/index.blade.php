@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>All Recipes</h1>
            <br>

            <div class="col-md-4">
                @yield('recipe.index.connected')
            </div>
            <br>
        </div>
        <br>

    <div class="wrapper">
        <div class="pricing-table">
            @foreach($recipes as $recipe) 
            <div class="pricing-box">
                <h2>{{ $recipe->title }}
                    @if($connected)
                        @if($favorite_recipes->contains('recipe_id', $recipe->id))
                            <a href="{{route('recipes.make_fav', $recipe->id)}}" class='btn btn-default btn-sm'> <i class="fas fa-star"></i> </a>
                        @else
                            <a href="{{route('recipes.make_fav', $recipe->id)}}" class='btn btn-default btn-sm'> <i class="far fa-star"></i> </a>
                        @endif
                    @endif
                </h2>
                <span class="price2">
                </span>
                        <!--  {{ $recipe->id }} -->
                        @if( isset($recipe['image']) )
                            <img src="{{ asset('image/'.$recipe->image) }}" alt="Image" class="img-fluid"  style=" max-height:150px; width: auto; " >
                        @else
                            <img src="{{ asset('image/No_Image_Available.png') }}" alt="No image" class="img-fluid"  style=" max-height:150px; width: auto; " >              
                        @endif 
                <span class="pricing-table-divider"></span>
                <p class="description">     {{ substr($recipe->description, 0, 75) }}
                                            {{ strlen($recipe->description) > 75 ? "..." : "" }}</p>
                <span class="pricing-table-divider"></span>
                <p class="description">{{ date('M j, Y', strtotime($recipe->created_at) ) }}</p>
                <span class="pricing-table-divider"></span>
                <p class="description">
                            <a href="{{route('recipes.show', $recipe->id)}}" class='btn btn-default btn-sm'>View </a>
                            {!! Html::linkRoute('recipes.edit', 'Edit', array($recipe->id), array('class'=>'btn btn-default btn-sm') ) !!}
                </p>
            </div>
            @endforeach 
        </div>
    </div>
</div>
    <div class="mx-auto col-3">
        <div class="text-center">
            {!! $recipes->links(); !!}
        </div>
    </div>
    

@endsection
