<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrcodeController;
use App\Http\Controllers\PlacaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/qr-code/{id}',[App\Http\Controllers\QrcodeController::class,'index'])->name('add-qr-code');

Route::get('/placas',[App\Http\Controllers\PlacaController::class,'index'])->name('placas');

Route::get('/generar-placa/{placa}',[App\Http\Controllers\PlacaController::class,'printPlaca'])->name('generar-placa');

Route::get('/placa/{id}',[App\Http\Controllers\PlacaController::class,'VerPlaca'])->name('ver-placa');