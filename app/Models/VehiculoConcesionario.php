<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiculoConcesionario extends Model
{
    use HasFactory;

    protected $table = 'vehiculosxconcesionarios'; // Nombre de la tabla
    public $timestamps = false; // Si la tabla no tiene columnas created_at y updated_at

    protected $fillable = ['VIN', 'idConcesionario', 'adquision'];

    // Relación con la tabla VEHICULOS
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'VIN', 'VIN');
    }

    // Relación con la tabla CONCESIONARIOS
    public function concesionario()
    {
        return $this->belongsTo(Concesionario::class, 'idConcesionario', 'idConcesionario');
    }
}