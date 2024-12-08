<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Planta;


class PlantaadminController extends Controller
{
    /*public function mostrarModelo(){
        $modelos = Modelo::all();
        return view ('modelo', compact ('modelos'));
    }*/

    public function index(Request $request) {
        $buscarpor = $request->get('buscarpor');
        $plantas = Planta::where('nombre', 'like', '%' . $buscarpor . '%')->paginate(10);
        return view('plantaadmin', compact('plantas', 'buscarpor'));
    }

    public function agregarPlanta(){
        return view ('agregarPlanta');
    }

    public function guardarPlanta(Request $req) {

        $Planta = new Planta();

        $nombre = $req->input('nombre');
        $ubicacion = $req->input('ubicacion');

        $Planta->nombre = $nombre;
        $Planta->ubicacion = $ubicacion;
        

        $Planta->save();

        return redirect()->route('planta.admin.inicio');
    }
}