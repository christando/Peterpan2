<?php

namespace App\Http\Controllers;

use App\Models\Report;
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

    public function report()
    {
        return view('User.report');
    }

    public function save_report(Request $request)
    {
        $request->validate([
            'date'=>'required|date',
            'report'=>'required|string',
            'star_rating'=>'require|in:1,2,3,4,5',
        ]);

        Report::create([
            'date'=>$request->date,
            'report'=>$request->report,
            'star_rating'=>$request->star_rating,
        ]);

        return redirect('/report');
    }
}
