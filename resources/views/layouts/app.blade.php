<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('shared.header')

    <div class="container">
        @yield('content')
    </div>

    @include('shared.footer')


    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
