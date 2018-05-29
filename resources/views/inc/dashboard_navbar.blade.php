<nav class="d-none d-md-block bg-light sidebar nav flex-column">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="{{route('user.parameters')}}">
          <span data-feather="home"></span>
          Settings <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('user.favorite_recipes')}}">
          <span data-feather="file"></span>
          Favorite recipes
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('user.favorite_products')}}">
          <span data-feather="file"></span>
          Favorite products
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard.my_recipes')}}">
          <span data-feather="file"></span>
          My recipes
        </a>
      </li>
    </ul>
    @yield('admin_nav_dashboard')
  </div>
</nav> 
