@extends('layouts.dashboard.dashboard_main')

@section('content_dashboard')

	<div>
		{!! Form::model(['route' => ['admin.manage_supermarkets.update'], 'method' => 'PUT' , 'files'=>true ]) !!}

		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Address</th>
		      <th scope="col">Opening hours</th>
		      <th scope="col">Description</th>
		      <th scope="col">Manage</th>

		    </tr>
		  </thead>
		  <tbody>
            

		  	@foreach($supermarkets as $supermarket)
				    <tr>
				      <th scope="row">{{$supermarket->id}}</th>
				      <td>{{$supermarket->Name}}</td>
				      <td>{{$supermarket->Adress}}</td>
				      <td>{{$supermarket->opening_hours}}</td>
				      <td>{{$supermarket->description}}</td>
				      <td>
					       <div class="btn-group btn-group-lg">
						       <button type="submit" value="Submit" class="btn btn-danger">Update</button>
						        <a href="{{ route('admin.manage_supermarkets.destroy', $supermarket->id)}}" class="btn btn-danger">
						        	Delete
						        </a>
					      </div> 
					  </td>
				    </tr>

		    @endforeach

		  </tbody>
		</table>
		
		{!! Form::close() !!}       


        <a href="{{ route('admin.manage_supermarkets.create')}}" class="btn btn-primary">
        	Add supermarket
        </a>
	</div>

@endsection

