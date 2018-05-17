

@extends('layouts.dashboard.dashboard_main')

@section('content_dashboard')

	<div class="col-lg-10 bg-light">
		<div class="row">
			<div class="col-lg-9">
				<table class="table">
				  <tbody>
				    <tr onclick="put_input('first_name', 'input')">
				      <td>First Name : </td>
				      <td class="first_name">{{$user->first_name}}</td>
				    </tr>
				    <tr>
				      <td>Last Name : </td>
				      <td>{{$user->last_name}}</td>
				    </tr>
					<tr>
					  <td>Email : </td>
					  <td>{{$user->email}}</td>
					</tr>
					<tr>
					  <td>Adress : </td>
					  <td>{{$user->adress}}</td>
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
				<img src="{{asset($user->photo)}}" class="img-fluid" alt="Responsive image">	
				<br>
				<p>Status : {{$status->name}}</p>	
			</div>
		</div>
		

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
