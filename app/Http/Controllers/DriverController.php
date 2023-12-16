<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function indexdriver()
    {
        return view('User.homedriver');
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
