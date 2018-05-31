@extends('layouts.dashboard.dashboard_main')

@section('content_dashboard')

	<div class="col-lg-8">
		@foreach($feedbacks as $feedback)
			<div>
				{{$feedback->author}}
				{{$feedback->text}}
				{{$feedback->title}}
				{{$feedback->id}}

			</div>
		@endforeach
	</div>

@endsection