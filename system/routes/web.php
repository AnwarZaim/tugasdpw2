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
    return view('welcome');
});


Route::get('template', function () {
    return view('template.base');
});

Route::get('login', function () {
    return view('login');
});

Route::get('index', function () {
    return view('index');
});

Route::get('produk', function () {
    return view('produk');
});

Route::get('detailproduk', function () {
    return view('detailproduk');
});
