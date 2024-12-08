<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Enum_color;


class Enum_coloradminController extends Controller
{
    /*public function mostrarModelo(){
        $modelos = Modelo::all();
        return view ('modelo', compact ('modelos'));
    }*/

    public function index(Request $request) {
        $buscarpor = $request->get('buscarpor');
        $enum_color = Enum_color::where('color', 'like', '%' . $buscarpor . '%')->paginate(10);
        return view('enum_coloradmin', compact('enum_color', 'buscarpor'));
    }

    public function agregarColor(){
        return view ('agregarColor');
    }

    public function guardarColor(Request $req) {

        $Enum_color = new Enum_color();

        $color = $req->input('color');

        $Enum_color->color = $color;

        $Enum_color->save();

        return redirect()->route('enum_color.admin.inicio');
    }
}