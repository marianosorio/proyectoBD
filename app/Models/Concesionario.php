<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concesionario extends Model
{
    use HasFactory;

    protected $table = 'concesionarios'; 
    protected $primaryKey = 'idConcesionario';
    public $timestamps = false;
}
