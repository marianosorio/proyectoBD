<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Concesionarioadmin;


class ConcesionarioadminController extends Controller
{
    /*public function mostrarConcesionario(){
        $concesionarios = Concesionarioadmin::all();
        return view ('concesionarioadmin', compact ('concesionarios'));
    }*/

    public function index(Request $request) {
        $buscarpor = $request->get('buscarpor');
        $concesionarios = Concesionarioadmin::where('nombre', 'like', '%' . $buscarpor . '%')->paginate(10);
        return view('concesionarioadmin', compact('concesionarios', 'buscarpor'));
    }

    public function agregarConcesionario(){
        return view ('agregarConcesionario');
    }

    public function guardarConcesionario(Request $req) {

        $Concesionarioadmin = new Concesionarioadmin();

        $nombre = $req->input('nombre');
        $direccion = $req->input('direccion');
        $noTelefono = $req->input('noTelefono');

        $Concesionarioadmin->nombre = $nombre;
        $Concesionarioadmin->direccion = $direccion;
        $Concesionarioadmin->noTelefono = $noTelefono;

        $Concesionarioadmin->save();

        return redirect()->route('concesionario.admin.inicio');
    }


}