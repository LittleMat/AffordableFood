@extends('layouts.app')

@section('content')

@include('layouts/products/_productnav')  


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <!-- maincontent stuff here -->


        <div class="container">
            <h1>List of products</h1>

            <!-- {{Form::open(array('url'=>'/'))}}
{{Form::text('keyword', null, array('placeholder'=>'search by keyword'))}}
{{Form::submit('search')}}
{{Form::close()}} -->

            <hr>

<div class="wrapper">
    <div class="pricing-table">
        @foreach($products as $product)

        	<div class="pricing-box">
		        <h2><a href="{{ route('products.show', $product->id)}}" class="product">{{$product->name}}</a></h2>
		        <span class="price">
                            @php
			                    $prices=array();
		                    @endphp
		        			@foreach($supermarket_info as $supermarket)
								@if($supermarket->product_id===$product->id)
									@php
										$prices[] = $supermarket->price;
									@endphp
								@endif
							@endforeach
							@if(count($prices) == 0)
                                @php
                                    $p= "unknown price";
                                @endphp
                            @else
                                @php
                                    $p= min($prices);
                                @endphp                          
                            @endif
                            @if( is_null(Auth::user()) )  
                               {{$p}} kr
                            @else
                               @if($p === "unknown price")
                                   {{$p}}
                               @else
                                    @foreach($currencies as $curr)
                                          @if( Auth::user()->currency === $curr->id)
                                                {{ $p*$curr->rate }} {{ $curr->symbol }}
                                          @endif
                                    @endforeach
                                @endif
                            @endif
		        </span>
		        <img src="{{ asset('image/products/'.$product->photo) }}" class="productimages" />
		        <span class="pricing-table-divider"></span>
		        <p class="description">{{$product->description}}</p>
		        <span class="pricing-table-divider"></span>
		        <p class="description">
		        			@foreach($supermarket_info as $supermarket)
								@if($supermarket->product_id===$product->id AND $supermarket->price===$p)
									{{$supermarket->Name}} 
									<br>
								@endif
							@endforeach</p>
			</div>
		@endforeach
    </div>
</div>

            <br>

        </div>
        <br>
        <br>
        <a href="{{route('products.create')}}">Add a product</a>
    </div>

</main>


@stop