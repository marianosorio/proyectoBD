<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculoadmin extends Model
{
    use HasFactory;

    protected $table = 'vehiculos';
    protected $primaryKey = 'VIN';
    public $incrementing = false;
    protected $keyType = 'string'; 
    protected $fillable = ['VIN', 'idModelo', 'color', 'noMotor', 'transmision'];
    public $timestamps = false;

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'idModelo', 'idModelo');
    }

    public function color()
    {
        return $this->belongsTo(Enum_color::class, 'color', 'color');
    }

    public function transmision()
    {
        return $this->belongsTo(Enum_transmision::class, 'transmision', 'transmision');
    }

}