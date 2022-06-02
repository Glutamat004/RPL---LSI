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

        .btn-index:hover {
            color: white;
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
                        <h1 style="color: #0D67B5">Reservation List</h1>
                        <table cellpadding="15">
                            <tr align="center" style="border-bottom: 2px solid #0D67B5; color : #0D67B5;">
                                <th>No</th>
                                <th>Seat</th>
                                <th>Time Slot</th>
                                <th>Book Category</th>
                                <th>Menu</th>
                            </tr>
                        </table>

                        <h1 style="color : gray; font-size : 40px">NO RESERVATON</h1>
                        
                        <br><br><br>
                        <a href="./tambah-reservasi.html" class="btn-index" style="background-color : #8ABFEE ">Make new reservation</a>
                    </center>
                </div>
        </div>
    </main>



</body>

</html>