<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Driver;
use App\Models\Mobil;
use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\String_;

use function PHPUnit\Framework\returnSelf;

class AdminController extends Controller
{

    public function home()
    {
        $data = Pesanan::paginate(5);
        return view('indexadmin', ['data'=> $data]);
    }

    public function addSopir($id)
    {
        $data = DB::select("select * from users where role = 'driver'");
        $d = Pesanan::find($id);
        return view('formpesananadmin', ['data' => $data, 'd'=>$d]);
    }

    public function save_sopir($id, Request $request)
    {
        $d = Pesanan::find($id);
        $d->tujuan = $request->tujuan;
        $d->jenis_mobil = $request->jenis_mobil;
        $d->kapasitas = $request->kapasitas;
        $d->tanggal_berangkat = $request->tanggal_berangkat;
        $d->tanggal_sampai = $request->tanggal_sampai;
        $d->driver = $request->driver;
        $d->save();

        return redirect('/home_a');
    }

    public function dataSopir()
    {
        $data = User::where('role', 'driver')->paginate(5);
        return view('datasopir', ['data'=>$data]);
    }

    public function lengkapSopir($id)
    {
        $d= User::find($id);

        return view('formdatasopir', ['d'=>$d]);
    }

    public function saveSopir($id, Request $request)
    {
        $sim = implode(', ', $request->get('sim'));
        $d = User::find($id);
        $d->sim = $sim;
        $d->save();
        return redirect('/data/sopir');
    }

    public function data_mobil()
    {
        $data = Mobil::paginate(5);
        return view('datamobil', ['data' => $data]);
    }


    public function formtambah()
    {
        return view('formtambahmobil');
    }

    public function tambah_mobil(Request $request)
    {
        Mobil::create([
            'merk' => $request->merk,
            'warna' => $request->warna,
            'jenis' => $request->jenis,
            'kapasitas' => $request->kapasitas,
            'nopol' => $request->nopol,
            'ket_stnk' => $request->ket_stnk,
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
