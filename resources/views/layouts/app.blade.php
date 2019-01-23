<html>
    <head>
        <title>LaraDex - @yield('title')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>

    <body>
        <div class="container"><!--div container para que no tome toda la pg-->
            @yield('content')    
        </div>  
    </body>
</html>