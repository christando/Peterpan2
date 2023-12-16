<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthDriverController extends Controller
{
    public function Login_Driver()
    {
        return view("Driver.LoginDriver");
    }

    public function CekLogin(Request $request)
    {
        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]))
        {
            return redirect('/HomeD');
        }
        else
        {
            redirect('/Login_D');
        }
    }

    public function Register_Driver()
    {
        return view("Driver.RegisterDriver");
    }

    public function Save(Request $request)
    {
        User::create(['username'=>$request->username,
        'first_name'=>$request->fname,
        'last_name'=>$request->lname,
        'username'=>$request->username,
        'email'=>$request->email,
        'password'=>bcrypt($request->password)
    ]);

        return redirect('/Login_D');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect('/');
    }
}
