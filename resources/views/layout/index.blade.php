<!DOCTYPE html>
<html>
<head>
    <title>Muabannha.com| @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <base href="{{asset('')}}">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    @yield('css')
</head>
<body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
     <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    @yield('script')
</body>
</html>