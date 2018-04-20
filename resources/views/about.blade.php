<!doctype html>
<html lang="{{ app()->getLocale() }}">
   
<head>
      @include('inc/head')

</head>
    
    <body>
     
     @include('inc/navbar')

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

    <footer>
        @include('inc/footer')
    </footer>

    </body>
</html>
