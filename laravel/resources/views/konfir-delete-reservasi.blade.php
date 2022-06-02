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
    </style>
</head>

<body>

    <main>

        <div style="margin: 50px 300px; box-shadow : 3px 3px 3px gray">
                <div style="padding : 20px 40px; background-color : white">
                    <center>
                        <h1 style="color: #0D67B5">Delete This Reservation ?</h1>

                        <form action="" method="">
                            <label for="">Book Category</label><br><br>
                            <input type="text" style="border-radius: 20px;"><br><br>
                            <label for="">Seat Number</label><br><br>
                            <input type="number" style="border-radius: 20px;"><br><br>
                            <label for="">Time Slot</label><br><br>
                            <input type="text" style="border-radius: 20px;"><br><br>
                            <div class="disp">
                                <div class="flex" style="width : 50%">
                                    <a href="reservation.html" class="btn" style="padding : 5px 25px;background-color : #8ABFEE; color : white; border-radius : 15px">Delete</a>
                                </div>
                                <div class="flex" style="width : 50%">
                                    <a href="tambah-reservasi.html" class="btn" style="padding : 5px 25px;background-color : lightred; color : white; border-radius : 15px">Cancel</a>
                                </div>
                            </div>
                            
                        </form>
                    </center>
                </div>
        </div>
    </main>



</body>

</html>