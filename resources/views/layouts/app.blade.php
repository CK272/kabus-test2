<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Kabus') }}</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>

    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-content">
                <div class="navbar-left">
                     <a href="{{ url('/') }}" style="font-size: 24px; font-weight: bold; color: #bb86fc; text-decoration: none;">KABUS</a>
                </div>
                
                <div class="navbar-right">
                    @auth
                        <a href="{{ route('dashboard') }}" class="navbar-btn">Dashboard</a>
                        
                        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                            @csrf
                            <button type="submit" class="navbar-btn navbar-btn-logout" style="border:none;">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="navbar-btn">Login</a>
                        <a href="{{ route('register') }}" class="navbar-btn">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <div class="content-wrapper">
        
        <div class="left-bar">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Vendors</a></li>
                <li><a href="#">Support</a></li>
            </ul>
        </div>

        <div class="main-content">
            @yield('content')
        </div>

        <div class="right-bar">
             <ul>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">Wallet</a></li>
            </ul>
        </div>

    </div>

    <footer class="footer">
        <div class="footer-container">
            &copy; {{ date('Y') }} {{ config('app.name', 'Kabus') }}. All rights reserved.
        </div>
    </footer>

</body>
</html>
