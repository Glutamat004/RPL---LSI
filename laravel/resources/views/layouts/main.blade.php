<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <title>Sumberdaya Informasi</title>
    <style>
       
    </style>
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
                        <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="#">Home</a></li>
                        <li><a class="nav-link {{ Request::is('/reservation') ? 'active' : '' }}" href="/reservation">Reservation</a></li>
                        <li><a class="nav-link {{ Request::is('#aboutus') ? 'active' : '' }}" href="#aboutus">About Us</a></li>
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
    
    @yield('template')
    
    <center>
        <br>

        <footer style="margin: 0; padding-left : 0; padding-right : 0">
            <div class="disp">
                <div class="flex" style="width: 50%;">
                    
                </div>
                <div class="flex" style="width: 50%;">
                    <div class="disp">
                        <div class="flex" >
                            <h1 class="brand">Layanan Sumberdaya Informasi</h1>
                        </div>
                        <div class="flex">
                            <img src="image/logo.png" alt="" width="100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="disp">
                <div class="flex" style="width: 30%;">
                    <h3>Contact Us</h3>
                    <h3>+62814562389</h3>
                </div>
                <div class="flex" style="width: 70%;">

                </div>
            </div>
            <p style="padding : 15px; margin-bottom : -10px; background-color : #0D67B5; color : white; position : relative; width : 100%;">www.LSI.com</p>
        </footer>
        

    </center>

</body>

</html>