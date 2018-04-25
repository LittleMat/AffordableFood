<!doctype html>
<html lang="{{ app()->getLocale() }}">
   
<head>
      @include('inc/head')

</head>
<body>
     
    @include('inc/navbar')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Create Recipe</h1><hr>
                
                {!! Form::open(array('route' => 'recipes.store'  )) !!}
                    
                    {{ Form::label('title', 'Title :') }}
                    {{ Form::text('title','Enter title', array('class'=>'form-control add-margin')) }}
                    
                    {{ Form::label('description', 'Description :') }}
                    {{ Form::textarea('description','Describe how to make your recipe', array('class'=>'form-control add-margin')) }}
                    
                    {{ Form::label('image', 'image :') }}
                    {{ Form::file('image', array('class'=>'form-control')) }}
                    
                    {{ Form::submit('Submit Recipe', array('class' =>'btn add-margin') ) }}
                     
                {!! Form::close() !!}
         
            </div>
        </div>
    </div>

    <footer>
            @include('inc/footer')
    </footer>

</body>
</html>

