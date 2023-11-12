<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\FasilitasHotelController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[PageController::class,'index']);

Route::get('/tentang',[PageController::class,'tentang']);

Route::get('/kamar-detail',[PageController::class,'kamar']);

Route::get('/fasilitas',[PageController::class,'fasilitas']);

Route::get('/pemesanan',[PemesananController::class,'index'])->middleware('user');

Route::get('/histori-pemesanan',[HomeController::class,'histori'])->middleware('user');

Route::get('/invoice/{id}',[HomeController::class,'invoice'])->middleware('user');

Route::post('/pemesanan', [PemesananController::class,'store'])->middleware('user');

Route::post('/status/{id}', [PemesananController::class,'status']);

Route::get('/resepsionis', [PemesananController::class,'resepsionis'])->name('resepsionis')->middleware('resepsionis');

Route::resource('/kamar', KamarController::class)->middleware('admin');

Route::resource('/fasilitas-kamar', FasilitasKamarController::class)->middleware('admin');

Route::resource('/fasilitas-hotel', FasilitasHotelController::class)->middleware('admin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user');

Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('admin.adminhome')->middleware('admin');
