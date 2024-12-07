<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcesionarioController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ModeloController;

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

/*Route::get('/concesionario', function () {
    return view('concesionario');
});*/

Route::get('/concesionario/mostrar', 
          [ConcesionarioController::class, 'mostrarConcesionario']);

Route::get('/vehiculo/mostrar', 
          [VehiculoController::class, 'mostrarVehiculo']);

Route::get('/modelo/mostrar', 
          [ModeloController::class, 'mostrarModelo']);