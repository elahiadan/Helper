<!DOCTYPE html>

<html lang="en">

<head>

    @include('partials.css')

    @stack('css')

</head>

<body>

    @include('includes.header')

    @yield('content')

    @include('includes.footer')
    
</body>

@include('partials.js')

@stack('js')

</html>