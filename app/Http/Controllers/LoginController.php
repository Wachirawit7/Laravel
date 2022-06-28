<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        // return "Form Submitted";

        $validateDaTa = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:13'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $comment = $request->input('comment');
        $gender = $request->input('radio');
        return 'Email :'.$email."<br>".'Password: '.$password."<br>".'Comment: '.$comment." <br>".'Gender: '.$gender."<br>";
    }
}
