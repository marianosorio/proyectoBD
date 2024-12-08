<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Enum_marca;


class Enum_marcaadminController extends Controller
{
    /*public function mostrarModelo(){
        $modelos = Modelo::all();
        return view ('modelo', compact ('modelos'));
    }*/

    public function index(Request $request) {
        $buscarpor = $request->get('buscarpor');
        $enum_marcas = Enum_marca::where('marca', 'like', '%' . $buscarpor . '%')->paginate(10);
        return view('enum_marcaadmin', compact('enum_marcas', 'buscarpor'));
    }

    public function agregarMarca(){
        return view ('agregarMarca');
    }

    public function guardarMarca(Request $req) {

        $Enum_marca = new Enum_marca();

        $marca = $req->input('marca');

        $Enum_marca->marca = $marca;

        $Enum_marca->save();

        return redirect()->route('enum_marca.admin.inicio');
    }
}