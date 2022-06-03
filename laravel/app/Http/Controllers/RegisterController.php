<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('signup', [
            'title' => 'Register'
        ]);
    }
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'nim' => ['required', 'max:255','unique:users'],
            'email' => ['required', 'email:dns','unique:users'],
            'password' => ['required', 'min:8'],
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        
        User::create($validatedData);

        // if ($validatedData->fails()) {
        //     return redirect('/register')->withErrors($validatedData)->withInput();
        // }
        return redirect('/login');
    }
}
