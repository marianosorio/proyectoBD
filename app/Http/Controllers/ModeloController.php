<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Modelo;


class ModeloController extends Controller
{
    /*public function mostrarModelo(){
        $modelos = Modelo::all();
        return view ('modelo', compact ('modelos'));
    }*/

    public function index(Request $request) {
        $buscarpor = $request->get('buscarpor');
        $modelos = Modelo::where('nombre', 'like', '%' . $buscarpor . '%')->paginate(10);
        return view('modelo', compact('modelos', 'buscarpor'));
    }

}

