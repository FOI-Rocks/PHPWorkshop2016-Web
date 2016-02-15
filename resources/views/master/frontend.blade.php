<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>@yield('pageTitle') - PHPWorkshop</title>

    <!-- CSS Dependencies -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/semantic.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/main.css") }}">

    <!-- JavaScript Dependencies -->
    <script src="{{ asset('js/jquery-2.0.0.min.js') }}"></script>
    <script src="{{ asset("js/semantic.min.js") }}"></script>
    <script src="{{ asset("js/global.js") }}"></script>
    @include('partials.google-analytics')

</head>
<body>
@yield('content')
</body>
</html>