<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcesionarioController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModeloadminController;
use App\Http\Controllers\ClienteadminController;
use App\Http\Controllers\ConcesionarioadminController;
use App\Http\Controllers\PlantaadminController;
use App\Http\Controllers\ProveedoradminController;
use App\Http\Controllers\Enum_coloradminController;
use App\Http\Controllers\Enum_marcaadminController;
use App\Http\Controllers\Enum_transmisionadminController;
use App\Http\Controllers\VentasadminController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

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

/*Route::get('/concesionario/mostrar', 
          [ConcesionarioController::class, 'mostrarConcesionario']);*/

Route::get('/vehiculo/mostrar', 
          [VehiculoController::class, 'mostrarVehiculo']);

Route::get('/modelo/mostrar', 
          [ModeloController::class, 'index']);

Route::get('/concesionario/mostrar', 
          [ConcesionarioController::class, 'index']);

Route::get('/inicio/admin', function () {
            return view('inicioadmin');
        });

Route::get('/modelo/admin', 
        [ModeloadminController::class, 'index'])->name('modelo.admin.inicio');

Route::get('/agregar/Modelo', 
        [ModeloadminController::class, 'agregarModelo'])->name('modelo.admin.agregar');

Route::post('/modelo/guardar', 
        [ModeloadminController::class, 'guardarModelo'])->name('modelo.admin.guardar');

Route::get('/planta/admin', 
        [PlantaadminController::class, 'index'])->name('planta.admin.inicio');

Route::get('/agregar/planta', 
        [PlantaadminController::class, 'agregarPlanta'])->name('planta.admin.agregar');

Route::post('/planta/guardar', 
        [PlantaadminController::class, 'guardarPlanta'])->name('planta.admin.guardar');

Route::get('/concesionario/admin', 
        [ConcesionarioadminController::class, 'index'])->name('concesionario.admin.inicio');

Route::get('/agregar/concesionario', 
        [ConcesionarioadminController::class, 'agregarConcesionario'])->name('concesionario.admin.agregar');

Route::post('/concesionario/guardar', 
        [ConcesionarioadminController::class, 'guardarConcesionario'])->name('concesionario.admin.guardar');

Route::get('/cliente/admin', 
        [ClienteadminController::class, 'index'])->name('cliente.admin.inicio');

Route::get('/agregar/cliente', 
        [ClienteadminController::class, 'agregarCliente'])->name('cliente.admin.agregar');

Route::post('/cliente/guardar', 
        [ClienteadminController::class, 'guardarCliente'])->name('cliente.admin.guardar');

Route::get('/proveedor/admin', 
        [ProveedoradminController::class, 'index'])->name('proveedor.admin.inicio');

Route::get('/agregar/proveedor', 
        [ProveedoradminController::class, 'agregarProveedor'])->name('proveedor.admin.agregar');

Route::post('/proveedor/guardar', 
        [ProveedoradminController::class, 'guardarProveedor'])->name('proveedor.admin.guardar');

        Route::get('/enum_color/admin', 
        [Enum_coloradminController::class, 'index'])->name('enum_color.admin.inicio');

Route::get('/agregar/enum_color', 
        [Enum_coloradminController::class, 'agregarColor'])->name('enum_color.admin.agregar');

Route::post('/enum_color/guardar', 
        [Enum_coloradminController::class, 'guardarColor'])->name('enum_color.admin.guardar');

Route::get('/enum_marca/admin', 
        [Enum_marcaadminController::class, 'index'])->name('enum_marca.admin.inicio');

Route::get('/agregar/enum_marca', 
        [Enum_marcaadminController::class, 'agregarMarca'])->name('enum_marca.admin.agregar');

Route::post('/enum_marca/guardar', 
        [Enum_marcaadminController::class, 'guardarMarca'])->name('enum_marca.admin.guardar');

Route::get('/enum_transmision/admin', 
        [Enum_transmisionadminController::class, 'index'])->name('enum_transmision.admin.inicio');

Route::get('/agregar/enum_transmision', 
        [Enum_transmisionadminController::class, 'agregarTransmision'])->name('enum_transmision.admin.agregar');

Route::post('/enum_transmision/guardar', 
        [Enum_transmisionadminController::class, 'guardarTransmision'])->name('enum_transmision.admin.guardar');

Route::get('/vehiculos', 
        [VehiculoController::class, 'index'])->name('vehiculo.admin.inicio');

Route::get('/vehiculos/crear', 
        [VehiculoController::class, 'crear'])->name('vehiculo.admin.agregar');
       
Route::post('/vehiculos/guardar', 
        [VehiculoController::class, 'almacenar'])->name('vehiculo.admin.guardar');

Route::get('/ventas', 
        [VentasadminController::class, 'index'])->name('ventas.admin.inicio');
