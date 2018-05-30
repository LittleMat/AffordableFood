@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-6">

				<h1>{{$product->prod_name}}</h1> <br>

				<p>Description : {{$product->description}} </p>
				
				<p>Brand : {{$product->brand_name}}</p>

				<p>Category : {{$product->cat_name}}</p>
				
				<p>Grade : {{$product->grade}}</p>

				<p><a href="{{ route('products.index')}}"> Back </a> </p>

				<form 
					action="{{route('products.destroy', $product->id)}}" 
					method="POST" 
					class="inline-block"
					onsubmit="return confirm('Are you sure?')";
				>
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<input type="submit" name="" value="Delete" class="btn btn-danger">
				</form>

				<form 
					action="{{route('products.edit', $product->id)}}" 
					method="GET" 
					class="inline-block"
				>
					{{ csrf_field() }}
					<input type="submit" name="" value="Update" class="btn btn-light">
				</form>
			</div>


			<div class="col-lg-6">

				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Supermarket</th>
				      <th scope="col">Price</th>
				      <th scope="col">Quantity</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($supermarket_info as $info)
				    <tr>
				      <th scope="row">{{$info->Name}}</th>
				      <td>
                        @if( is_null(Auth::user()) )  
                            {{ $info->price }} kr
                        @else
                            @foreach($currencies as $curr)
                                  @if( Auth::user()->currency === $curr->id)
                                        {{ $info->price*$curr->rate }} {{ $curr->symbol }}
                                  @endif
                            @endforeach
                        @endif
				          
				      </td>
				      <td>{{$info->quantity}}{{$info->measure_type}}</td>
				    </tr>
				    @endforeach
				  </tbody>
				</table>
				
				
        {!! Form::open(array('route' =>['product.comment'], 'method' => 'POST' )) !!} 

            {{ Form::label('description', 'Your comment :') }}
            {{ Form::text('description','Write your comment here', array('class'=>'form-control add-margin')) }}
            
            {{ Form::text('id', $product->id , array('class'=>'d-none')) }}

            {{ Form::submit('post', array('class' =>'btn add-margin') ) }}
                     
        {!! Form::close() !!}

			</div>
		</div>
	</div>
		
@stop