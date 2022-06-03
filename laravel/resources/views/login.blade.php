@extends('index')
@section('template')
    <main style="background-image: url('image/bg-index.jpeg'); background-size : cover;">
        @if(session()->has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         @endif
        <div style="margin: 62px 300px; box-shadow : 3px 3px 3px gray">
                <div style="padding : 20px 40px; background-color : white">
                    <center>
                        <h1 style="color: #0D67B5">Welcome Back!</h1>
                        <h2>Log back in to your account</h2>
                        <form action="/login" method="post">
                            @csrf
                            <input class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim" type="text" style="border-radius: 20px;" placeholder="NIM" value="{{ old('nim') }}" autofocus required>
                            @error('nim')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <br><br>

                            <input class="form-control @error('password') is-invalid @enderror" name="password" id="password"type="password" style="border-radius: 20px;" value="{{ old('password') }}" placeholder="Password" required><br><br>
                            <p>Do not have an account ? <strong><a href="/signup">Sign Up</a></strong></p>
                            <button class="btn" style="padding : 5px 25px;background-color : #8ABFEE; color : white; border-radius : 15px">Login</button>
                        </form>
                    </center>
                </div>
        </div>
    </main>
@endsection


    

