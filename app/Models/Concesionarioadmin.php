<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concesionarioadmin extends Model
{
    use HasFactory;

    protected $table = 'concesionarios';
    protected $primaryKey = 'idConcesionario';
    //protected $fillable = ['nombre', 'direccion', 'noTelefono']; 
    public $timestamps = false;


}