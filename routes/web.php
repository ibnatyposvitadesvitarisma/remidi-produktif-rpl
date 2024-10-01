<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerkController;

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/about', function () {
    return ('halaman_about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/tentang_saya', function () {
    return view('tentang_saya');
});
Route::get('/Daftar_barang', function () {
    return view('barang');
});
Route::resource('/merk',MerkController::class, );
