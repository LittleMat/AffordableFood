<!doctype html>
<html lang="{{ app()->getLocale() }}">
   
<head>
      @include('inc/head')
      <title>Recipes Index</title>

</head>
<body>
   
    @include('inc/navbar')
        
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>All Recipes</h1>
            </div>
            <br>

            <div class="col-md-4">
                <a href="{{route('recipes.create')}}" class="btn btn-lg btn-block btn-primary">Create a new recipe</a>
            </div>
            <br>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th></th>
                    </thead>

                    <tbody>

                        @foreach($recipes as $recipe)    
                            <tr>
                                <th>            <!-- {{ $recipe->id }} -->
                                    @if( isset($recipe['image']) )
                                        <img src="{{ asset('image/'.$recipe->image) }}" alt="Image" class="img-fluid"  style=" max-height:150px; width: auto; " >
                                    @else
                                        <img src="{{ asset('image/No_Image_Available.png') }}" alt="No image" class="img-fluid"  style=" max-height:150px; width: auto; " >              
                                    @endif  
                                </th>              
                                <td>{{ $recipe->title }}</td>
                                <td>{{ substr($recipe->description, 0, 75) }}
                                    {{ strlen($recipe->description) > 75 ? "..." : "" }}
                                </td>
                                <td>{{ date('M j, Y', strtotime($recipe->created_at) ) }}</td>
                                <td>
                                    <a href="{{route('recipes.show', $recipe->id)}}" class='btn btn-default btn-sm'>View </a>
                                    {!! Html::linkRoute('recipes.edit', 'Edit', array($recipe->id), array('class'=>'btn btn-default btn-sm') ) !!}
                                </td>
                            </tr>
                        @endforeach  
                    </tbody>
                </table>
                
                <div class="mx-auto col-3">
                    <div class="text-center">
                        {!! $recipes->links(); !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <footer>
         @include('inc/footer')
    </footer>   
</body>
</html>
