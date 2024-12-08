<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentasadminController extends Controller
{
    // Método para mostrar todas las ventas
    public function index()
    {
        // Obtener todas las ventas con sus relaciones (Concesionario y Cliente)
        $ventas = Venta::with(['concesionario', 'cliente'])->get();
        
        // Pasar las ventas a la vista
        return view('venta', compact('ventas'));
    }
}