<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexuser()
    {
        $data = Pesanan::paginate(5);
        return view('User.homeuser', ['data'=>$data]);
    }

    public function datapesanan()
    {
        return view('datapesanan');
    }
    public function formtambahpesanan()
    {
        return view('formtambahpesanan');
    }
    public function formeditpesanan($id)
    {
        $d = Pesanan::find($id);
        return view('formeditpesanan', ['d'=>$d]);
    }
    public function update($id,Request $request)
    {
        $d = Pesanan::find($id);
        $d->tujuan = $request->tujuan;
        $d->jenis_mobil = $request->jenis_mobil;
        $d->kapasitas = $request->kapasitas;
        $d->tanggal_berangkat = $request->tanggal_berangkat;
        $d->tanggal_sampai = $request->tanggal_sampai;
        $d->save();
        return redirect('/homeU');
    }
    public function tambah_pesanan(Request $request)
    {
        Pesanan::create([
            'tujuan'=> $request->tujuan,
            'jenis_mobil'=> $request->jenis_mobil,
            'kapasitas'=> $request->kapasitas,
            'tanggal_berangkat'=>$request->tanggal_berangkat,
            'tanggal_sampai'=>$request->tanggal_sampai,
        ]);
        return redirect('/homeU');
    }

    public function delete_pesanan($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->delete();
        return redirect('/homeU');
    }

    public function report()
    {
        return view('User.report');
    }

    public function save_report(Request $request)
    {
        Report::create([
            'tgl_laporan'=>$request->tgl_laporan,
            'report'=>$request->report,
            'star_rating'=>$request->star_rating,
        ]);

        return redirect('/homeU');
    }

}
