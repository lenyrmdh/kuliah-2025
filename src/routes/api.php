<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPegawaiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Di sinilah kamu bisa mendaftarkan semua route API untuk aplikasimu.
| Route ini otomatis dimuat oleh RouteServiceProvider dan semuanya
| berada dalam middleware group "api".
|
*/

// Tes endpoint untuk Swagger
Route::get('/halo', function () {
    return response()->json(['message' => 'Berhasil ambil data']);
});

// Endpoint untuk ambil semua data pegawai
Route::get('/data-pegawais', [DataPegawaiController::class, 'index']);


