<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/input-product', function () {
    return view('input-product');
});

Route::get('/update-product', function () {
    return view('updateproduct');
});

Route::get('/konfirmasi', function () {
    return view('konfirmasi');
});