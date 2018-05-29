@extends('inc.dashboard_navbar')

@section('admin_nav_dashboard')

	<br>
	    <ul class="nav flex-column">  Manage: <br>
	  <li class="nav-item">
	    <a class="nav-link" href="{{route('admin.manage_products')}}">
	      <span data-feather="file"></span>
	      	Products
	    </a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="{{route('admin.manage_recipes')}}">
	      <span data-feather="file"></span>
	        Recipes
	    </a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="{{route('admin.manage_supermarkets.index')}}">
	      <span data-feather="file"></span>
	        Supermarkets
	    </a>
	  </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{route('admin.manage_users')}}">
          <span data-feather="file"></span>
            Users
        </a>
      </li>
	</ul>
	  

@endsection