<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $table = 'modelos'; 
    protected $fillable = ['nombre', 'estiloCarroceria', 'marca'];
    public $timestamps = false;
}