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
}

