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
    public function login(){
        return view('Login');
    }

    public function register(){
        return view('Register');
    }

    public function save_a(Request $request)
    {
        Admin::create([
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
        ]);
        return redirect('/');
    }

    public function cek_login(Request $request){
        if(Auth::attempt([
            'username' => $request -> username,
            'password' => $request -> password
        ]))
        {
            return redirect('/home_a');
        }
        else
        {
            redirect('/');
        }
    }

    public function home()
    {
        return view('Layouts.homeadmin');
    }

    public function indexadmin()
    {
        return view('indexadmin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
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
