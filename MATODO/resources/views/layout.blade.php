<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') </title>
        <link rel="icon" href="img/icon.png">
        <link rel="stylesheet" href="css/style.css">
        @yield('links')
    </head>
    <body>
        <nav>
            <img src="img/logo4.png" alt="">
            
            <div>
                <a href="{{route('login')}}"> Log in</a>
                <a href="{{route('register')}}" class="button btn-nav">Start for free</a>
            </div>
        </nav>
        <div id="body">
            @yield('content')
        </div>
        @yield('footer')
    </body>
    @yield('js')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
