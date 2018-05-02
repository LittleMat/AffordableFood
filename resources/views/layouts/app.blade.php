<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
 <head>  
    @include('inc/head')
</head> 

<body>
  
  @include('inc/navbar')
  
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer>
            @include('inc/footer')
    </footer>
</body>
</html>
