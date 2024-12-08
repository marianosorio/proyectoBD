<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Modeloadmin;
use App\Models\Enum_marca;


class ModeloadminController extends Controller
{
    /*public function mostrarModelo(){
        $modelos = Modelo::all();
        return view ('modelo', compact ('modelos'));
    }*/

    public function index(Request $request) {
        $buscarpor = $request->get('buscarpor');
        $modelos = Modeloadmin::where('nombre', 'like', '%' . $buscarpor . '%')->paginate(10);
        return view('modeloadmin', compact('modelos', 'buscarpor'));
    }

    public function agregarModelo(){
        return view('agregarModelo');
    }

    public function guardarModelo(Request $req) {
       
        $Modeloadmin = new Modeloadmin();

        $nombre = $req->input('nombre');
        $estiloCarroceria = $req->input('estiloCarroceria');
        $marca = $req->input('marca');

        $Modeloadmin->nombre = $nombre;
        $Modeloadmin->estiloCarroceria = $estiloCarroceria;
        $Modeloadmin->marca = $marca;

        $Modeloadmin->save();

        return redirect()->route('modelo.admin.inicio');
    }
}