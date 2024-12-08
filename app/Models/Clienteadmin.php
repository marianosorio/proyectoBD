<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clienteadmin extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'idCliente';
    protected $fillable = ['nombre', 'direccion', 'noTelefono', 'sexo', 'ingresosAnuales']; 
    public $timestamps = false;


}