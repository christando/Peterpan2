<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    public function Login_User()
    {
        return view("User.LoginUser");
    }

    public function CekLoginUser(Request $request)
    {
        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]))
        {
            return redirect('/HomeU');
        }
        else
        {
            redirect('/Login_U');
        }
    }

    public function Register_User()
    {
        return view("User.RegisterUser");
    }

    public function Save(Request $request)
    {
        User::create(['username'=>$request->username,
        'first_name'=>$request->fname,
        'last_name'=>$request->lname,
        'email'=>$request->email,
        'password'=>bcrypt($request->password)
    ]);

        return redirect('/Login_U');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect('/');
    }
}
