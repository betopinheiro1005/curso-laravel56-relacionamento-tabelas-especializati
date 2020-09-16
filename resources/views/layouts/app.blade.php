<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    <script type="text/javascript" src="{{ url('assets/js/bootstrap.js') }}"></script>   

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/styles.css') }}">

    <title>@yield("title")</title>
</head>
<body>
    @yield('content')
</body>
</html>