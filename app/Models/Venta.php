<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'VENTAS';

    // Indicamos las columnas que pueden ser asignadas masivamente
    protected $fillable = [
        'fecha', 
        'idConcesionario', 
        'idCliente', 
        'VIN', 
        'precio'
    ];

    public $timestamps = false;

    // Relación con la tabla Concesionarios
    public function concesionario()
    {
        return $this->belongsTo(Concesionarioadmin::class, 'idConcesionario');
    }

    // Relación con la tabla Clientes
    public function cliente()
    {
        return $this->belongsTo(Clienteadmin::class, 'idCliente');
    }
}