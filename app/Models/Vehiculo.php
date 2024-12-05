<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concesionario extends Model
{
    use HasFactory;

    protected $table = 'vehiculos'; 
    protected $primaryKey = 'VIN';
    public $timestamps = false;
}
