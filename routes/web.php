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
// Route::get('/mlayout', function () {
//     return view('layouts.m-main');
// });
Route::get('/', function () {
    return view('mobile.home');
});
Route::get('/sobre', function () {
    return view('mobile.sobre');
});
Route::get('/descarregar', function () {
    return view('mobile.descarregar');
});