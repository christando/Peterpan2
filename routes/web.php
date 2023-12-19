<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthDriverController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/regis_user',[PageController::class, 'regis']);
Route::get('/logout',[PageController::class, 'logout']);
Route::get('/',[PageController::class, 'Login']);
Route::get('/regis',[PageController::class, 'register']);
Route::post('/ceklogin', [AuthController::class, 'CekLogin']);



Route::get('/home_a',[AdminController::class, 'home']);
Route::get('/data/mobil',[AdminController::class, 'data_mobil']);
Route::get('/data/mobil/formtambah',[AdminController::class, 'formtambah']);
Route::POST('/tambahmobil',[AdminController::class, 'tambah_mobil']);
Route::get('/data/mobil/delete/{id}',[AdminController::class, 'delete_mobil']);


//user
Route::get('/homeU', [UserController::class, 'indexuser']);
Route::get('/pesanan', [UserController::class,'datapesanan']);
Route::get('/data/pesanan/formtambahpesanan',[UserController::class, 'formtambahpesanan']);
Route::POST('/tambahpesanan',[UserController::class, 'tambah_pesanan']);
Route::get('/formeditpesanan/{id}',[UserController::class, 'formeditpesanan']);
Route::put('/update/{id}',[UserController::class, 'update']);
Route::get('/data/pesanan/delete/{id}',[UserController::class, 'delete_pesanan']);
Route::get('/report',[UserController::class, 'report']);
Route::post('/save/report',[UserController::class, 'save_report']);

//driver
Route::post('/save_D', [AuthDriverController::class, 'Save']);
Route::post('/ceklogin_D', [AuthDriverController::class, 'CekLoginDriver']);
Route::get('/homeD', [DriverController::class, 'indexdriver']);

