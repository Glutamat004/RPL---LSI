@extends('index')
@section('template')
    <main style="background-image: url('image/bg-index.jpeg'); background-size : cover;">

        <div style="margin: 50px 200px; box-shadow : 3px 3px 3px gray">
            <div class="disp" >
                <div class="flex" style="width: 20%; padding : 20px; background-color : #8ABFEE; color : white">
                    <h1>Have an account ? </h1>
                    <a href="/login" class="btn-index" style="border : 2px solid white; border-radius : 5px; padding: 2px 15px">Login</a>
                </div>
                <div class="flex" style="width: 80%; padding : 20px 40px; background-color : white">
                    <center>
                        <h1 style="color: #0D67B5">Welcome!</h1>
                        <h2>Make an account to start</h2>
                        <form action="/register" method="post">
                            @csrf
                            <input class="form-control @error('name') is-invalid @enderror" required value="{{ old('name') }}" type="text"name="name" id="name" style="border-radius: 20px;" placeholder="Name"><br><br>
                            <input class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}" type="email" name="email" id="email" style="border-radius: 20px;" placeholder="Email"><br><br>
                            <input class="form-control @error('nim') is-invalid @enderror" required value="{{ old('nim') }}" name="nim" id="nim" type="text" style="border-radius: 20px;" placeholder="NIM"><br><br>
                            <input class="form-control @error('password') is-invalid @enderror" required value="{{ old('password') }}" name="password" id="password"type="password" style="border-radius: 20px;" placeholder="Password"><br><br>
                            <button type="submit" class="btn" style="background-color : #8ABFEE; color : white; border-radius : 15px"> Sign Up</button>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </main>
@endsection

