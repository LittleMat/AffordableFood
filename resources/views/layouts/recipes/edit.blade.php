<!doctype html>
<html lang="{{ app()->getLocale() }}">
   
<head>
      @include('inc/head')

</head>
<body>
     
    @include('inc/navbar')
    
    @if( is_null($recipes) )
            <div class="col-md-6 offset-3">
            <h1 class="alert alert-danger text-center">
                This recipe doesn't exist
            </h1> 
            </div>
    @else
           <div class="row">
                                  
                <div class="col-sm-9">    
                    
                     {!! Form::model($recipes, ['route' => ['recipes.update', $recipes->id], 'method' => 'PUT' ]) !!}
                          
                        <h4> {{ Form::label('title', 'Title :') }} </h4>
                        {{ Form::text('title', null, ["class" => 'form-control form-control-lg mb-2']) }}
                        
                        <h4> {{ Form::label('description', 'Description :') }} </h4>
                        {{ Form::textarea('description', null, ["class" => 'form-control mb-2']) }} 
                                                  
                </div>              
                
                <div class="col-sm-3">
                   <div class="well">
                       
                        <div class="col-sm-9">
                                  {!! Html::linkRoute('recipes.show', 'Cancel', array($recipes->id), array('class'=>'btn btn-primary btn-block') ) !!}
                                  <br>    
                        </div>
                        
                        <div class="col-sm-9">
                                 {{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}
                                 {!! Form::close() !!}       
                        </div>
                   </div>
                </div>
            </div>
             
            <div class="row">
                <div class="col-sm-6">
                    <h5>Created at : </h5>
                    <p>{{ date('M j, Y', strtotime($recipes->created_at)) }}</p>
                </div>
                <div class="col-sm-6">
                    <h5>Updated at : </h5>
                    <p>{{ date('M j, Y', strtotime($recipes->updated_at)) }}</p>
                </div>  
            </div>
            
            
    @endif
    
    

<footer> @include('inc/footer') </footer>   
</body>
</html>
