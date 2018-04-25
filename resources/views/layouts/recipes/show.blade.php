<!doctype html>
<html lang="{{ app()->getLocale() }}">
   
<head>
      @include('inc/head')

</head>
<body>
     
    @include('inc/navbar')
    
    @if( is_null($recipes) )
            <div class="col-md-6">
            <h1 class="alert alert-danger text-center">
                This recipe doesn't exist
            </h1> 
            </div>
    @else
            <h1> {{ $recipes->title }} </h1>
            <p> {{ $recipes->description }} </p>   
    @endif
    
    

<footer> @include('inc/footer') </footer>   
</body>
</html>
