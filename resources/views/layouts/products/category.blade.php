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

            <table class="table table-striped table-bordered">

                <thead>
                    <tr>
                        <th></th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Supermarket</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($products as $product)

                    <tr>
                        <td><img src="{{ ($product->photo) }}" class="productimages" /></td>

                        <td><a href="{{ route('products.show', $product->id)}}" class="product">{{$product->name}}</a></td>

                        <td>{{$product->description}}</td>
                        <td></td>    
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <br>

        </div>
        <br>
        <br>
        <a href="{{route('products.create')}}">Add a product</a>
    </div>

</main>


@stop