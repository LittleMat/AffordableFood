<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
 <head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
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
