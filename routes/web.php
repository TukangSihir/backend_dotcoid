<?php

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

Route::get('/lowongan', function () {
    return view('lowongan/index');
});

Route::get('/home', function () {
    return view('lowongan/index');
});

Route::resource('lowongan', 'LowonganController');
Route::resource('home', 'LowonganController');