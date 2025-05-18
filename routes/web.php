<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;

// Halaman Beranda
Route::get('/', function () {
    return view('welcome');
});

// Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return view('about');
});

// Halaman Produk
Route::get('/produk', function () {
    return view('products');
});

// Halaman Insight
Route::get('/insight', function () {
    return view('insights');
});

// Halaman Kontak
Route::get('/kontak', function () {
    return view('contact');
});


