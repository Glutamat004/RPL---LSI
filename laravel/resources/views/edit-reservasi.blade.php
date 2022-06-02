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

        <div style="margin: 50px 200px; box-shadow : 3px 3px 3px gray">
            <div class="disp" >
                <div class="flex" style="width: 40%; padding : 70px 1px; background-color : #8ABFEE; color : white">
                    <img src="images/logo.png" alt="" width="400" height="300">
                </div>
                <div class="flex" style="width: 60%; padding : 20px 40px; background-color : white">
                    <center>
                        <h1 style="color: #0D67B5">Edit Your Reservation Here</h1>
                        <form action="" method="">
                            <label for="">Book Category</label><br>
                            <select name="" id="">
                                <option value="">Ekonomi</option>
                                <option value="">Manajemen</option>
                                <option value="">Peternakan</option>
                                <option value="">Kehutanan</option>
                                <option value="">Kedokteran Hewan</option>
                                <option value="">Ilmu Komputer</option>
                            </select>
                            <br>
                            <label for="">Seat</label><br>
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                            <br>
                            <label for="">Time Slot</label><br>
                            <select name="" id="">
                                <option value="">07.00 - 08.00</option>
                                <option value="">08.00 - 10.00</option>
                                <option value="">10.00 - 12.00</option>
                                <option value="">13.00 - 15.00</option>
                            </select>
                            <br><br>
                            <div class="disp">
                                <div class="flex" style="width : 50%">
                                    <a href="konfir-edit-reservasi.html" class="btn" style="padding : 5px 25px;background-color : #8ABFEE; color : white; border-radius : 15px">Save</a>
                                </div>
                                <div class="flex" style="width : 50%">
                                    <a href="reservation.html" class="btn" style="padding : 5px 25px;background-color : lightred; color : white; border-radius : 15px">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </main>



</body>

</html>