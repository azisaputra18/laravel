<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\http\Controllers\APIObat;
use App\http\Controllers\APIResep;
use App\http\Controllers\APIProduk;

Route::get('/obat',[APIObat::class,'getObat']);
Route::post('/obat',[APIObat::class,'addObat']);
Route::put('/obat/{obat}',[APIObat::class,'updateObat']);
Route::delete('/obat/{obat}',[APIObat::class,'deleteObat']);

Route::get('/produk',[APIProduk::class,'getproduk']);
Route::post('/produk',[APIProduk::class,'addproduk']);
Route::put('/produk/{produk}',[APIProduk::class,'updateproduk']);
Route::delete('/produk/{produk}',[APIProduk::class,'deleteproduk']);

Route::get('/Resep',[APIResep::class,'getResep']);
Route::post('/Resep',[APIResep::class,'addResep']);
Route::put('/Resep/{Resep}',[APIResep::class,'updateResep']);
Route::delete('/Resep/{Resep}',[APIResep::class,'deleteResep']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
