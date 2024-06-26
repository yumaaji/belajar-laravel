<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view ('register.index',[
            "title" => "Register",
            "active" => "register"
        ]);
    }

    public function store(Request $request){
       $validateData = $request->validate([
            'name' => ['required','max:200'],
            'username' => ['required','min:3','max:200','unique:users'],
            'email' => ['required','email:dns','unique:users'],
            'password' => ['required','min:5','max:200']
        ]);

        User::create($validateData);

        return redirect('/login')->with('success', 'Register Successfull');
    }
}
