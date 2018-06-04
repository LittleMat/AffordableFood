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
				      <th scope="col"></th>
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
				      <td>
				      	 <a href="{{route('supermarketProduct.destroy', ['sup_prod_id'=>$info->id, 'prod_id'=>$product->id])}}" class="btn btn-danger">Delete</a> 
				      </td>
				    </tr>
				    
				    @endforeach
				  </tbody>
				</table>

				<div class="col-lg-12 text-center">
					<button onclick="show_hide_add_supermarket_product()" class="btn btn-primary centered">Add to a supermarket</button>
				</div> 

				<br>

					
				<form action="{{route('supermarketProduct.store', $product->id)}}" method="POST">
					{{ csrf_field() }}

					<table class="table" id="add_supermarket" style=" display: visible;">
					  <thead>
					    <tr>
					      <th scope="col">Supermarket</th>
					      <th scope="col">Price</th>
					      <th scope="col">Quantity</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">
					      		<select class="form-control" id="select_supermarket" name="supermarket">
					      	      @foreach($supermarkets as $supermarket)
					      	      	<option value="{!!$supermarket->id!!}"
					      	      		{{isset($supermarket->id) ? (($supermarket->id == $supermarket->id) ? 'selected' : '') : ''}}>
					      	      		{{$supermarket->Name}}
					      	      	</option>
					      	      @endforeach
					      	    </select>
					      </th>
					      <td>
	                        <div class="form-group">
	                            <input type="text" class="form-control" id="price" name="price" aria-describedby="priceHelp" placeholder="Price in DKK">
	                        </div>	          
					      </td>
					      <td>
					      	<div class="form-group">
	                            <input type="text" class="form-control" id="quantity" name="quantity" aria-describedby="quantityHelp" placeholder="Quantity">
	                        </div>		          
					      </td>
					      <td>
					      	<div class="form-group">
	                            <input type="text" class="form-control" id="type" name="type" aria-describedby="typeHelp" placeholder="Type">
	                        </div>					          
					      </td>
					      <td>
					      	<button type="submit" class="btn btn-primary">+</button>
					      </td>
					    </tr>

					  </tbody>
					</table>
					
				</form>

				

				<br>
				
				
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