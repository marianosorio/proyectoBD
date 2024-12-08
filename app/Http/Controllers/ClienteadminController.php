<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clienteadmin;


class ClienteadminController extends Controller
{
    /*public function mostrarModelo(){
        $modelos = Modelo::all();
        return view ('modelo', compact ('modelos'));
    }*/

    public function index(Request $request) {
        $buscarpor = $request->get('buscarpor');
        $clientes = Clienteadmin::where('idCliente', 'like', '%' . $buscarpor . '%')->paginate(10);
        return view('clienteadmin', compact('clientes', 'buscarpor'));
    }

    public function agregarCliente(){
        return view ('agregarCliente');
    }

    public function guardarCliente(Request $req) {

        $Clienteadmin = new Clienteadmin();

        $nombre = $req->input('nombre');
        $direccion = $req->input('direccion');
        $noTelefono = $req->input('noTelefono');
        $sexo = $req->input('sexo');
        $ingresosAnuales = $req->input('ingresosAnuales');

        $Clienteadmin->nombre = $nombre;
        $Clienteadmin->direccion = $direccion;
        $Clienteadmin->noTelefono = $noTelefono;
        $Clienteadmin->sexo = $sexo;
        $Clienteadmin->ingresosAnuales = $ingresosAnuales;


        $Clienteadmin->save();

        return redirect()->route('cliente.admin.inicio');
    }
}