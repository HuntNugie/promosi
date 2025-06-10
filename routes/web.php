<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('layouts.home');
})->name("index");

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource("produk",ProdukController::class);
Route::resource("pegawai",PegawaiController::class);
Route::get("/myProfile",[ProfileController::class,"index"])->name("myProfile");
