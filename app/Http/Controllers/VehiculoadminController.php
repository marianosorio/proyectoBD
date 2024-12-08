<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Modelo;
use App\Models\EnumColor;
use App\Models\EnumTransmision;

class VehiculoadminController extends Controller
{
    // Mostrar todos los vehículos
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $vehiculos = Vehiculo::with(['modelo', 'color', 'transmision'])
                             ->where('VIN', 'like', '%' . $buscarpor . '%')
                             ->orWhere('color', 'like', '%' . $buscarpor . '%')
                             ->orWhere('transmision', 'like', '%' . $buscarpor . '%')
                             ->paginate(10);

        return view('vehiculoadmin', compact('vehiculos', 'buscarpor'));
    }

    // Mostrar formulario para agregar un nuevo vehículo
    public function agregarVehiculo()
    {
        $modelos = Modelo::all();
        $enum_color = Enum_color::all();
        $enum_transmision = EnumTransmision::all();

        return view('agregarVehiculo', compact('modelos', 'colores', 'transmisiones'));
    }

    // Guardar un nuevo vehículo
    public function guardarVehiculo(Request $request)
    {
        $vehiculos = new Vehiculo();
        $vehiculos->VIN = $request->input('VIN');
        $vehiculos->idModelo = $request->input('idModelo');
        $vehiculos->color = $request->input('color');
        $vehiculos->noMotor = $request->input('noMotor');
        $vehiculos->transmision = $request->input('transmision');

        $vehiculos->save();

        return redirect()->route('vehiculo.admin.inicio');
    }
}