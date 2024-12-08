<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proveedor;


class ProveedoradminController extends Controller
{
    /*public function mostrarModelo(){
        $modelos = Modelo::all();
        return view ('modelo', compact ('modelos'));
    }*/

    public function index(Request $request) {
        $buscarpor = $request->get('buscarpor');
        $proveedores = Proveedor::where('idProveedor', 'like', '%' . $buscarpor . '%')->paginate(10);
        return view('proveedoradmin', compact('proveedores', 'buscarpor'));
    }

    public function agregarProveedor(){
        return view ('agregarProveedor');
    }

    public function guardarProveedor(Request $req) {

        $Proveedor = new Proveedor();

        $nombre = $req->input('nombre');
        $direccion = $req->input('direccion');
        $noTelefono = $req->input('noTelefono');

        $Proveedor->nombre = $nombre;
        $Proveedor->direccion = $direccion;
        $Proveedor->noTelefono = $noTelefono;

        $Proveedor->save();

        return redirect()->route('proveedor.admin.inicio');
    }
}