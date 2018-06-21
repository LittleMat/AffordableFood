     <div class="col-12 fixed-top" style="height: 50px; background-color:#fdfff6"></div>  
    
     <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    
        <div class="text-center container-fluid logo"> 
            <a  href="{{ route('home') }}" class="navbar-brand">
                <img src="{{asset('image/logo.png')}}" class="logoimg" alt="Logo" >               
            </a>

        </div>   

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav">       
                 
                  <li class="nav-item">  
                    <a href="/home">
                      <img src="image/UKflag.png" class="Flag">
                    </a>
                  </li> 

                  <li class="nav-item">  
                    <a class="nav-link" href=""></a>
                  </li> 

                  <li class="nav-item">  
                    <a href="/home/nl">
                      <img src="image/NLflag.png" class="Flag">
                    </a>
                  </li> 

                  <li class="nav-item">  
                    <a class="nav-link" href=""></a>
                  </li> 

                  <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">{{ Lang::get('messages.Products')}} <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="{{ route('recipes.index') }}">{{ Lang::get('messages.Recipes')}}<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">{{ Lang::get('messages.About')}} <span class="sr-only">(current)</span></a>
                  </li>  
    
            </ul>
            <ul class="navbar-nav ml-md-auto mr-5 ml-3">
                       	<div class="d-none d-sm-block d-md-none Filer "> </div> 
                
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ Lang::get('messages.Login')}}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ Lang::get('messages.Register')}}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ Lang::get('messages.Logout')}}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('user.parameters') }}">
                                        Dashboard
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                
            </ul>
            

          </div>
    </nav>
    
   <div class="col-12" style="height: 50px; background-color:#fdfff6"></div>  