<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Auth\SessionGuard;

use function PHPUnit\Framework\returnSelf;

class AdminController extends Controller
{

    public function home()
    {
        return view('Layouts.homeadmin');
    }

    public function indexadmin()
    {
        return view('indexadmin');
    }

    public function data_mobil()
    {
        $data = Mobil::paginate(5);
        return view('datamobil',['data'=>$data]);
    }

    public function formtambah()
    {
        return view('formtambahmobil');
    }

    public function tambah_mobil(Request $request)
    {
        Mobil::create([
            'merk'=> $request->merk,
            'warna'=> $request->warna,
            'jenis'=> $request->jenis,
            'kapasitas'=> $request->kapasitas,
            'nopol'=> $request->nopol,
            'ket_stnk'=>$request->ket_stnk,
        ]);
        return redirect('/data/mobil');
    }

    public function delete_mobil($id)
    {
        $mobil = Mobil::find($id);
        $mobil->delete();
        return redirect('/data/mobil');
    }


}
