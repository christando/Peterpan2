<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Report;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function indexdriver(Request $request)
    {
        // $reports = Report::where('id_driver', '=', $request->id_driver)->get();
        $data = Pesanan::paginate(5);
        return view('Driver.homedriver', ['data'=> $data]);
    }

    public function datapesanan()
    {
        return view('Driver.datapesanan');
    }

    public function datamobil()
    {
        return view('Driver.datamobil');
    }


}
