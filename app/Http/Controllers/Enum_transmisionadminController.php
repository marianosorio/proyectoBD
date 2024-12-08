<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Enum_Transmision;


class Enum_transmisionadminController extends Controller
{
    /*public function mostrarModelo(){
        $modelos = Modelo::all();
        return view ('modelo', compact ('modelos'));
    }*/

    public function index(Request $request) {
        $buscarpor = $request->get('buscarpor');
        $enum_transmision = Enum_Transmision::where('transmision', 'like', '%' . $buscarpor . '%')->paginate(10);
        return view('enum_transmisionadmin', compact('enum_transmision', 'buscarpor'));  // Aquí 'enum_transmision' debe coincidir con la vista
    }

    public function agregarTransmision(){
        return view ('agregarTransmision');
    }

    public function guardarTransmision(Request $req) {

        $Enum_transmision = new Enum_Transmision();

        $transmision = $req->input('transmision');

        $Enum_transmision->transmision = $transmision;

        $Enum_transmision->save();

        return redirect()->route('enum_transmision.admin.inicio');
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'transmision', 'transmision');
    }
}