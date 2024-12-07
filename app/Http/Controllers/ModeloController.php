<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Modelo;


class ModeloController extends Controller
{
    public function mostrarModelo(){
        $modelos = Modelo::all();
        return view ('modelo', compact ('modelos'));
    }
}