<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factory</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
    <body>
        @include('user.login')
        @include('user.register')
        @include('inc.slideshow')
        @include('inc.navbarPlaceholder')
        @include('inc.navbar')
        
        

        @yield('content')

        <!--@include('inc.sidebar')-->
        

    </body>
</html>