<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <title>Sumberdaya Informasi</title>
    <link rel="icon" href="/image/logo.png">
</head>

<body>
    <header id="home">
        <nav>
            <div class="disp">
                <div class="flex" style="width : 10%">
                    <img src="/image/logo.png" alt="" width="100" height="100" style="border-radius: 500px;">
                </div>
                <div class="flex" style="width : 45%">
                    <h1 class="brand">Layanan Sumberdaya Informasi</h1>
                </div>
                <div class="flex" style="margin-top: 15px; width : 45%">
                    <ul>
                        <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                        <li><a class="nav-link {{ Request::is('/reservation') ? 'active' : '' }}" href="/reservation">Reservation</a></li>
                        <li><a class="nav-link {{ Request::is('#aboutus') ? 'active' : '' }}" href="/#aboutus">About Us</a></li>
                        @auth
                            <li><a href="/logout"><strong>Logout</strong></a></li>
                        @else
                            <li><a href="/signup"><strong>Sign Up</strong></a></li>
                        @endauth
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <div class="container mt-4">
        @yield('template')
    </div>
    
    

</body>

</html>