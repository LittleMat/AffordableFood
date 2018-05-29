@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
        	 @if(Auth::check() && Auth::user()->getRole()=='admin')
                @include('inc/dashboard_admin_navbar')
        	 
        	 @else
            	@include('inc/dashboard_navbar')

        	@endif
        </div>
        <div class="col-lg-9">
            @yield('content_dashboard')
        </div>
    </div>
</div>
@endsection

