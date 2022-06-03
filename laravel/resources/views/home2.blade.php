@extends('index')
@section('template')
    <main style="background-image: url('image/bg-index.jpeg'); background-size : cover;">

        <div class="index">
            <br><br>
            <h1>Welcome to</h1>
            <h1>Layanan Sumberdaya Informasi</h1>
            <p>You can book your chair on our website now</p>
            <div class="disp">
                <div class="flex" style="width: 25%;">
                    <a href="/reservation" class="btn-index">Book Your Reservation</a>
                </div>
                <div class="flex" style="width: 25%;">
                    <a href="#learnmore" class="btn-index">Learn More</a>
                </div>
                <div class="flex" style="width: 50%;">
                    <!-- PASS -->
                </div>
            </div>
        </div>
        <br><br><br><br><br><br>
    </main>
    <nav style="padding: 20px;">
        <center>
            <h1>About Us</h1>
        </center>
    </nav>

    <div id="aboutus">
        <div class="disp" style="padding: 70px 0;">
            <center>
                <div class="flex" style="width: 30%;">
                    <img src="image/img-about.jpg" alt="" width="400" height="300">
                </div>
            </center>
            <div class="flex" style="width: 50%;">
                <center>
                    <h2>Visi</h2>
                    <p style="margin: 0 300px;">To develop strong library branches that are vital community destinations
                        for knowledge,
                        inspiration, innovation, and renewal</p>
                    <h2>Misi</h2>
                    <p style="margin: 0 300px;">To provide free and open access to a broad range of materials and
                        services to people of all ages and backgrounds</p>
                </center>
            </div>
        </div>
    </div>
    <div id="learnmore" style="background-color: #A3D4FF; padding : 40px;">
        <center>
            <h1>How to Book Your Chair at LSI</h1>
            <div class="disp">
                <div class="flex" style="margin: 0 70px; border-radius : 7px; box-shadow : 3px 3px 3px gray">
                    <img src="image/book1.png" alt="" width="350" height="250">
                    <p><strong>1 </strong> Make sure you logged in to our website. If you don't havean account, please
                        Sign Up first.</p>
                </div>
                <div class="flex" style="margin: 0 70px; border-radius : 7px; box-shadow : 3px 3px 3px gray">
                    <img src="image/book2.png" alt="" width="350" height="250">
                    <p><strong>2 </strong> Choose your book category, number of seat, and time slot.</p>
                </div>
                <div class="flex" style="margin: 0 70px; border-radius : 7px; box-shadow : 3px 3px 3px gray">
                    <img src="image/book3.png" alt="" width="350" height="250">
                    <p><strong>3 </strong> Book your reservation and you can edit or delete if you change your mind.</p>
                </div>
            </div>

            <br><br>

            <a href="reservation" class="btn-index"
                style="background-color: #80c1f9 ; box-shadow : 3px 3px 3px gray; color : black">Make a Reservation</a>
        </center>
    </div>

    <br><br><br>

    <center>

        <h1>Frequently Asked Question</h1>

        <div style="margin: 10px 100px;">
            <select style="margin-bottom: 20px;">
                <option>Apakah LSI buka di hari minggu ?</option>
            </select>
            <select style="margin-bottom: 20px;">
                <option>Apakah LSI buka di hari minggu ?</option>
            </select>
            <select style="margin-bottom: 20px;">
                <option>Apakah LSI buka di hari minggu ?</option>
            </select>
            <select style="margin-bottom: 20px;">
                <option>Apakah LSI buka di hari minggu ?</option>
            </select>
        </div>
    </center>
    @include('footer')
@endsection
