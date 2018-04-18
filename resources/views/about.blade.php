<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/style.css')}}" rel="stylesheet" />
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </head>
    <body>
       
         
    <nav class="navbar navbar-expand-md bg-dark navbar-dark col-12 fixed-top">

        <div class="text-center container-fluid logo " > 
            <a  href="/" class="navbar-brand">
                <img src="{{asset('image/logo.png')}}"  alt="Logo" >
                
            </a>
            
        </div>   
               
                                           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="instructors.html">Fresh</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="classes.html">Bread</a>
                    </li>    
                </ul>
            </div>  
            <form class="form-inline my-2 my-lg-0 float-right">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
                                 
        </nav>
        
         <div class="col-12" style="height: 200px"></div>    

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card" >
                        <img class="card-img-top img-fluid" src="{{asset('image/female-user.png')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Laura Hafeneger</h4>
                            <p class="card-text">Some example text.</p>
                            <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#instr1">More</button>
                            <div id="instr1" class="collapse">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nam ducimus maxime, dolore cum fugiat incidunt, optio temporibus voluptas sint quam culpa, praesentium fuga corporis atque maiores rem doloribus inventore.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card" >
                        <img class="card-img-top img-fluid" src="{{asset('image/male-user.png')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Remi Buitenkanp</h4>
                            <p class="card-text">Some example text.</p>
                            <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#instr2">More</button>
                            <div id="instr2" class="collapse">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nam ducimus maxime, dolore cum fugiat incidunt, optio temporibus voluptas sint quam culpa, praesentium fuga corporis atque maiores rem doloribus inventore.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card" >
                        <img class="card-img-top img-fluid" src="{{asset('image/male-user.png')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Mathieu Montgomery</h4>
                            <p class="card-text">Some example text.</p>
                            <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#instr3">More</button>
                            <div id="instr3" class="collapse">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nam ducimus maxime, dolore cum fugiat incidunt, optio temporibus voluptas sint quam culpa, praesentium fuga corporis atque maiores rem doloribus inventore.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card" >
                        <img class="card-img-top img-fluid" src="{{asset('image/male-user.png')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Mathieu Ponhoreau</h4>
                            <p class="card-text">Some example text.</p>
                            <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#instr4">More</button>
                            <div id="instr4" class="collapse">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nam ducimus maxime, dolore cum fugiat incidunt, optio temporibus voluptas sint quam culpa, praesentium fuga corporis atque maiores rem doloribus inventore.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card" >
                        <img class="card-img-top img-fluid" src="{{asset('image/male-user.png')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Loris Anyaegbunam</h4>
                            <p class="card-text">Some example text.</p>
                            <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#instr4">More</button>
                            <div id="instr4" class="collapse">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nam ducimus maxime, dolore cum fugiat incidunt, optio temporibus voluptas sint quam culpa, praesentium fuga corporis atque maiores rem doloribus inventore.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </body>
</html>
