<html>
    <head>
        <title>LaraDex - @yield('title')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>

    <body>

        <nav class="navbar navbar-dark bg-primary">
            <a href="#" class="navbar-brand">LaraDex</a>
        </nav>
        <div class="container"><!--div container para que no tome toda la pg-->
            @yield('content')    
        </div>  
    </body>
</html>