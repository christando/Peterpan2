<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function regis(Request $request)
    {
        User::create([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>$request->role,
        ]);

        return redirect('/');
    }

    public function login(){
        return view('Login');
    }

    public function register(){
        return view('Register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
