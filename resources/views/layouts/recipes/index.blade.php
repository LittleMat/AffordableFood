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
            <div class="col-md-10">
                <h1>All Recipes</h1>
            </div>

            <div class="col-md-2">
                <a href="{{route('recipes.create')}}" class="btn btn-lg btn-block btn-primary">Create new recipes</a>
            </div>
            <hr>
        </div>
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

                        @foreach($recipes as  $recipe)    
                            <tr>
                                <th>{{ $recipe->id }}</th>
                                <td>{{ $recipe->title }}</td>
                                <td>{{ substr($recipe->description, 0, 50) }}
                                    {{ strlen($recipe->description) > 50 ? "..." : "" }}
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
            </div>
        </div>
    </div>
    

    <footer>
         @include('inc/footer')
    </footer>   
</body>
</html>
