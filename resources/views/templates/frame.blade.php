<html>
    <head>
        <title>@yield('title')</title>
    </head>
    @yield('css')
    @yield('head')
    @yield('nav')

    <body>
            @yield('content')
    </body>
</html>