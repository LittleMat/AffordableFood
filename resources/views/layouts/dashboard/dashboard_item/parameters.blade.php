

@extends('layouts.dashboard.dashboard_main')

@section('content_dashboard')

	<div class="col-lg-10 bg-light">
		<div class="row">
			<div class="col-lg-9">

                    {!! Form::model(['route' => ['user.update'], 'method' => 'PUT' , 'files'=>true ]) !!}

					<table class="table">
					  <tbody>
					    <tr>
					      <td>First Name : </td>
					      <td>
							  <div class="form-row">
							  	<div class="form-group col-md-6">
							   		<input type="text" class="form-control first_name" id="first_name" name="first_name" value="{{$user->first_name}}" style="border:0px solid transparent">
							    </div>
							    <div class="form-group col-md-2">
							  		<button type="submit" class="btn btn-primary validate_first_name" style="visibility:hidden">Validate</button> 
							  	</div>
							  </div>
						  </td>
					    </tr>
					    <tr>
					      <td>Last Name : </td>
					      <td>
					      	<div class="form-row">
					      		<div class="form-group col-md-6">
					      	 		<input type="text" class="form-control last_name" id="last_name" name="last_name" value="{{$user->last_name}}" style="border:0px solid transparent">
					      	  </div>
					      	  <div class="form-group col-md-2">
					      			<button type="submit" class="btn btn-primary validate_last_name" style="visibility:hidden">Validate</button> 
					      		</div>
					      	</div>
					      </td>
					    </tr>
						<tr>
						  <td>Email : </td>
						  <td>
						  	<div class="form-row">
						  		<div class="form-group col-md-6">
						  	 		<input type="text" class="form-control email" id="email" name="email" value="{{$user->email}}" style="border:0px solid transparent">
						  	  </div>
						  	  <div class="form-group col-md-2">
						  			<button type="submit" class="btn btn-primary validate_email" style="visibility:hidden">Validate</button> 
						  		</div>
						  	</div>
						  </td>
						</tr>
						<tr>
						  <td>Adress : </td>
						  <td>
						  	<div class="form-row">
						  		<div class="form-group col-md-6">
						  	 		<textarea type="text" class="form-control adress" id="adress" name="adress" style="border:0px solid transparent">{{$user->adress}}</textarea>
						  	  </div>
						  	  <div class="form-group col-md-2">
						  			<button type="submit" class="btn btn-primary validate_adress" style="visibility:hidden">Validate</button> 
						  		</div>
						  	</div>
						  </td>
						</tr>
						<tr>
						  <td>Language : </td>
						  <td>{{$user->language}}</td>
						</tr>
						<tr>
						  <td>Currency : </td>
						  <td>{{$user->currency}}</td>
						</tr>
					  </tbody>
					</table>
			</div>


			<div class="col-lg-3 text-center">
				<img src="{{asset($user->photo)}}" class="img-fluid img-account" alt="Responsive image">	
				<br>
				<p>Status : {{$status->name}}</p>	
				<input type="file" name="file_photo" id="file_photo" style="visibility:hidden";/>
				<button type="submit" class="btn btn-primary validate_image">Validate</button> 
			</div>
		</div>
		{!! Form::close() !!}       

		

		<br>

		<div class="col-lg-5">
			<table class="table ">
			  <tbody>
			    <tr>
			      <td>Number of favorite recipes : </td>
			      <td>{{$stat['nb_recipe']}}</td>
			    </tr>
			    <tr>
			      <td>Number of favorite products : </td>
			      <td>{{$stat['nb_products']}}</td>
			    </tr>
				<tr>
				  <td>Number of recipes created : </td>
				  <td>{{$stat['nb_c_recipe']}}</td>
				</tr>
			  </tbody>
			</table>
		</div>
		
	</div>

@endsection

