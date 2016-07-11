<!DOCTYPE html>
<html>

<head>
    <title> @yield('title')</title>
    <link rel="stylesheet" href="/style.css"> 
</head>

    <body>
        @include('shared.navbar')

        @yield('content')
    </body>
</html>