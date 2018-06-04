@extends('layouts.dashboard.dashboard_main')

@section('content_dashboard')

	<div class="col-lg-8">

		@foreach($feedbacks as $feedback)

				<div class="card">
				  <div class="card-header">
				    #{{$feedback->id}} - {{$feedback->title}}
				  </div>
				  <div class="card-body">
				    <h5 class="card-title">{{$feedback->author}}</h5>
				    <p class="card-text">{{$feedback->text}}</p>
				    <a href="{{route('feedback.destroy', $feedback->id)}}" class="btn btn-primary">Delete</a>
				  </div>
				</div>
				<br>

		@endforeach
	</div>

@endsection