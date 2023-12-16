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
}
