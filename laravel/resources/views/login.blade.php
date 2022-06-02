@extends('index')
@section('template')
    <main style="background-image: url('image/bg-index.jpeg'); background-size : cover;">

        <div style="margin: 62px 300px; box-shadow : 3px 3px 3px gray">
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
@endsection


    

