@extends('layouts.dashboard.dashboard_main')

@section('content_dashboard')

	<div>
		<div class="row">

			<div class="wrapper">
		      	<div class="pricing-table">
					@foreach($favorite_products as $favorite_product)
				        	<div class="pricing-box">
						        <h2><a href="{{ route('products.show', $favorite_product->id)}}" class="product">{{$favorite_product->name}}</a> </h2>

		        		        <span class="price">
		                                    @php
		        			                    $prices=array();
		        		                    @endphp
		        		        			@foreach($supermarket_info as $supermarket)
		        								@if($supermarket->product_id===$favorite_product->id)
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
						        		        
        		        		<span class="pricing-table-divider"></span>
		                        <a href="{{ route('user.favorite_products.destroy', $favorite_product->id)}}" class="col-lg-12 btn btn-outline-danger">
		                		  <span class="align-middle">Un-fav</span>
		                		</a>
						        
						        <img src="{{ asset('image/products/'.$favorite_product->photo) }}" class="productimages" />
						        <span class="pricing-table-divider"></span>
						        <p class="description">{{$favorite_product->description}}</p>

		        		       
							</div>
					@endforeach
				</div>
			</div>
		
		</div>
	</div>

@endsection
					