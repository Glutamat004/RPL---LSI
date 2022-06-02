<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Sumberdaya Informasi</title>
    <style>
        a {
            text-decoration: none;
            text-align: center;
        }

        .btn {
            text-decoration: none;
            padding: 6px 10px;
            background-color: darkred;
        }

        input {
            background-color: lightgray;
        }

        .index {
            margin: 20px 50px 20px 200px;
        }

        .index h1 {
            font-size: 44px;
        }

        .index h2 {
            font-size: 37px;
        }

        .index p {
            font-size: 27px;
        }
    </style>
</head>

<body style="background-image: url('images/bg-index.jpeg'); background-size : cover;">
    <header id="home">
        <nav>
            <div class="disp">
                <div class="flex" style="width : 10%">
                    <img src="images/logo.png" alt="" width="100" height="100" style="border-radius: 500px;">
                </div>
                <div class="flex" style="width : 45%">
                    <h1 class="brand">Layanan Sumberdaya Informasi</h1>
                </div>
                <div class="flex" style="margin-top: 15px; width : 45%">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="reservation.html">Reservation</a></li>
                        <li><a href="index.html">About Us</a></li>
                        <li><a href="signup.html"><strong>Sign Up</strong></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <div style="margin: 50px 300px; box-shadow : 3px 3px 3px gray">
                <div style="padding : 20px 40px; background-color : white">
                    <center>
                        <h1 style="color: #0D67B5">Welcome Back!</h1>
                        <h2>Log back in to your account</h2>
                        <form action="" method="">
                            <input type="number" style="border-radius: 20px;" placeholder="NIM"><br><br>
                            <input type="password" style="border-radius: 20px;" placeholder="Password"><br><br>
                            <p>Do not have an account ? <strong><a href="signup.html">Sign Up</a></strong></p>
                            <button class="btn" style="padding : 5px 25px;background-color : #8ABFEE; color : white; border-radius : 15px">Login</button>
                        </form>
                    </center>
                </div>
        </div>
    </main>



</body>

</html>