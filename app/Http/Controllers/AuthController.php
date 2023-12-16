<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function CekLogin(Request $request)
    {
        $request -> validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $datalogin = [
            'username'=>$request->username,
            'password'=>$request->password,
        ];
        if(Auth::attempt($datalogin)){
            if(Auth::user()->role == 'admin'){
                return redirect('/home_a');
            }
            elseif(Auth::user()->role == 'driver'){
                return redirect('/homeD');
            }
            elseif(Auth::user()->role == 'pemesan'){
                return redirect('homeU');
            }
        }
        else{
            return redirect('/')->withErrors('email atau password salah');
        }


    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
