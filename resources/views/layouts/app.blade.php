<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    <link rel="icon" type="image/png" href="{{ asset('images/kabus.png') }}">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    
    
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar glass">
        <div>
            <a href="{{ url('/') }}"><strong>{{ config('app.name', 'Kabus') }}</strong></a>
        </div>
        <div>
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <a href="{{ route('logout') }}">Logout</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container">
        <div class="card glass">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer glass">
        &copy; {{ date('Y') }} {{ config('app.name', 'Kabus') }}. All rights reserved.
    </footer>

</body>
</html>
