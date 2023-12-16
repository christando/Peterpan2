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


}
