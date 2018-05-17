@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            @include('inc/dashboard_navbar')
        </div>
        <div class="col-lg-9">
            @yield('content_dashboard')
        </div>
    </div>
</div>
@endsection
