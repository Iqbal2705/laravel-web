<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

//hahahaha
Route::get('/pcr', function () {
    return ('Selamat datang di website kampus PCR!');
});

Route::get('/mahasiswa', function () {
    return ('Hallo Mahasiswa');
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama  Saya : ' .$param1;
});

Route::get('/nim/{param1}', function ($param1 = '') {
    return 'Nim  Saya : ' .$param1;
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);


Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/matakuliah/{param2}', function ($param2) {
    return view('matakuliah');
});


Route::get('/matakuliah/show/{kode}', [MatakuliahController::class, 'show']);

Route::get('/matakuliah', [MatakuliahController::class, 'index']);

