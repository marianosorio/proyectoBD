<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vehiculo;


class VehiculoController extends Controller
{
        public function mostrarVehiculo(){
        $vehiculos = Vehiculo::all();
        return view ('buscador', compact ('vehiculos'));
        }
    
}