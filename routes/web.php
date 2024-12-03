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

Route::get('/landing/inicio', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/inicio', function () {
    return view('inicio');
});


Route::get('/pruebita', function () {
    return view('prueba');
});

Route::get('/buscador', function () {
    return view('buscador');
});

