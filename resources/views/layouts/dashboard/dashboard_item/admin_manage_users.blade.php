@extends('layouts.dashboard.dashboard_main')

@section('content_dashboard')

	<div>
		@foreach($users as $user)

			<div class="card">
			  <div class="card-header">
			    {{$user->id}} - {{$user->name}}
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">{{$user->name}}</h5>
			    <p class="card-text">
			    	<table class="table">
			    	  <tbody>
			    	    <tr>
			    	      <th scope="row">First name</th>
			    	      <td>{{$user->first_name}}</td>
			    	    </tr>
			    	    <tr>
			    	      <th scope="row">Last name</th>
			    	      <td>{{$user->last_name}}</td>
			    	    </tr>
			    	    <tr>
			    	      <th scope="row">Email</th>
			    	      <td>{{$user->email}}</td>
			    	    </tr>
			    	    <tr>
			    	      <th scope="row">Adress</th>
			    	      <td>{{$user->adress}}</td>
			    	    </tr>
			    	    <tr>
			    	      <th scope="row">Status</th>
			    	      <td>{{$user->status}}</td>
			    	    </tr>
			    	    <tr>
			    	      <th scope="row">Member since</th>
			    	      <td>{{$user->created_at}}</td>
			    	    </tr>
			    	  </tbody>
			    	</table>

			    </p>
			    <a href="{{route('admin.manage_users.delete', $user->id)}}" onclick="return confirm('Are you sure?')"; class="btn btn-danger">Delete User</a>
			  </div>
			</div>
			<br>

		@endforeach
	</div>

@endsection


			
			