<!DOCTYPE html>
<html>

<head>
    <title>Home - REST</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('view/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('view/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('view/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('view/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('view/css/style.css') }}">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>

<body>

    @include('patials.navbar')
    @yield('contents')
    @include('patials.footer')
    <script src="{{ asset('view/js/jquery.min.js') }}"></script>
    <script src="{{ asset('view/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('view/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('view/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('view/js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('view/js/main.js') }}"></script>

</body>
</html>
