<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error - {{ config('app.name', 'Kabus') }}</title>
    <link rel="stylesheet" href="{{ asset('css/dark-glass.css') }}">
</head>
<body>

<main class="container">
    <div class="card glass" style="text-align: center;">
        @yield('content')
        <p><a href="{{ url('/') }}" class="btn">Go Home</a></p>
    </div>
</main>

</body>
</html>
