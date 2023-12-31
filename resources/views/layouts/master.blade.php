<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{url('')}}/css/normalize.css" rel="stylesheet">
    <title>ERP - STARTER KIT</title>
    @yield('styles')
</head>
<body>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@yield('scripts-header')

@yield('content')

@yield('scripts-footer')
</body>
</html>
