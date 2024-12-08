<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Concesionario;


class ConcesionarioController extends Controller
{
    public function mostrarConcesionario(){
        $concesionarios = Concesionario::all();
        return view ('concesionario', compact ('concesionarios'));
    }

    public function index(Request $request) {
        $buscarpor = $request->get('buscarpor');
        $concesionarios = Concesionario::where('direccion', 'like', '%' . $buscarpor . '%')->paginate(10);
        return view('concesionario', compact('concesionarios', 'buscarpor'));
    }
    


}

