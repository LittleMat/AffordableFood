@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<h1 class="createproduct">Feedback</h1><br>
				<form action="{{route('feedback.store')}}" method="POST"  class="inline-block">
					{{ csrf_field() }}
					{{ method_field('POST') }}
					
					<div class="form-group">
						<label for="description" class="control-label sr-only"> Title </label>
					    <input type="text"  class="form-control" name="title" placeholder="Title"><br>
					</div>

					<div class="form-group">
						<label for="description" class="control-label sr-only"> Feedback </label>
						<textarea name="text" id="description" cols="30" rows="10" placeholder="Feedback" class="form-control"></textarea><br>
					</div>

        			<button type="submit" class="btn add-margin"  id="submit_category" value="Submit">Submit feedback</button>   
				</form>
			</div>
		</div>
	</div>
@endsection