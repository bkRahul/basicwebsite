<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
        @if ( Request::is('/') )
            @include('inc.showcase')
        @endif    
            <div class="row">    
                <div class="col-md-8">
                    @yield('content')
                </div>
                <div class="col-md-4">
                    @include('inc.sidebar')
                </div>
            </div>    
        </div>
    </body>
    <footer class="footer text-center bg-primary">
        <span>Welcome to Laravel</span>
    </footer>
</html>
