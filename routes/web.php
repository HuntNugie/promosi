<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('layouts.home');
})->name("index");

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource("produk",ProdukController::class);
Route::resource("pegawai",PegawaiController::class);
Route::prefix("myProfile")->group(function(){
    Route::get("/index",[ProfileController::class,"index"])->name("myProfile");
    Route::get("/edit",[ProfileController::class,"edit"])->name("myProfile.edit");
    Route::post('/update/{profile}',[ProfileController::class,"update"])->name("myProfile.update");
});
Route::prefix("/perusahaan")->group(function(){
    Route::get("/detail",[PerusahaanController::class,"index"])->name("perusahaan");
    Route::get("/edit/{perusahaan:slug}",[PerusahaanController::class,"edit"])->name("perusahaan.edit");
    Route::put("/edit/{perusahaan:slug}",[PerusahaanController::class,"update"])->name("perusahaan.update");
});
