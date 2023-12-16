<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthDriverController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\DriverController;
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

Route::get('/',[AdminController::class, 'login']);
Route::get('/regis_a',[AdminController::class, 'register']);
Route::post('/save_a',[AdminController::class, 'save_a']);
Route::POST('/ceklogin_a',[AdminController::class, 'cek_login']);
Route::get('/home_a',[AdminController::class, 'home']);
Route::get('/logout',[AdminController::class, 'logout']);
Route::get('/data/mobil',[AdminController::class, 'data_mobil']);
Route::get('/data/mobil/formtambah',[AdminController::class, 'formtambah']);
Route::POST('/tambahmobil',[AdminController::class, 'tambah_mobil']);
Route::get('/data/mobil/delete/{id}',[AdminController::class, 'delete_mobil']);

//user
Route::get('/Login_U',[AuthUserController::class, 'Login_User']);
Route::get('/Regis_U', [AuthUserController::class, 'Register_User']);
Route::post('/save_U', [AuthUserController::class, 'Save']);
Route::post('/ceklogin_U', [AuthUserController::class, 'CekLoginUser']);
Route::get('/HomeU', [UserController::class, 'indexuser']);

//driver
Route::get('/Login_D',[AuthDriverController::class, 'Login_Driver']);
Route::get('/Regis_D', [AuthDriverController::class, 'Register_Driver']);
Route::post('/save_D', [AuthDriverController::class, 'Save']);
Route::post('/ceklogin_D', [AuthDriverController::class, 'CekLoginDriver']);
Route::get('/HomeD', [DriverController::class, 'indexdriver']);
