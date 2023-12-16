<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexuser()
    {
        $data = User::all();
        return view('User.homeuser', ['data'=>$data]);
    }

    public function datapesanan()
    {
        return view('User.datapesanan');
    }
}
