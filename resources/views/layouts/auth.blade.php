<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    <link rel="icon" type="image/png" href="{{ asset('images/kabus.png') }}">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">


</head>
<body>

<main class="container">
    <div class="card glass" style="max-width: 500px; margin: auto;">
        @yield('content')
    </div>
</main>

</body>
</html>
