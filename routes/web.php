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

Route::get('/regis_U', [AuthUserController::class, 'Register_User']);
Route::post('/save_U', [AuthUserController::class, 'Save']);

Route::get('/homeU', [UserController::class, 'indexuser']);

//driver
Route::get('/login_D',[AuthDriverController::class, 'Login_Driver']);
Route::get('/regis_D', [AuthDriverController::class, 'Register_Driver']);
Route::post('/save_D', [AuthDriverController::class, 'Save']);
Route::post('/ceklogin_D', [AuthDriverController::class, 'CekLoginDriver']);
Route::get('/homeD', [DriverController::class, 'indexdriver']);
