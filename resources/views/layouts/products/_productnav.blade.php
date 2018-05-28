    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Product Categories</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
                @foreach($categories as $category)
              <li class="nav-item">
                <a class="nav-link active categoryname" href="{{ route('products.categories', $category->name)}}"> 
                  {{$category->name}}
                </a>
               </li>
                @endforeach
            </ul>
          </div>
        </nav>