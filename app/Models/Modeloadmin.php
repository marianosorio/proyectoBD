<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modeloadmin extends Model
{
    use HasFactory;

    protected $table = 'modelos'; 
    protected $primaryKey='idModelo';
    //protected $fillable = ['nombre', 'estiloCarroceria', 'marca'];
    public $timestamps = false;

    public function enumMarca()
    {
        return $this->belongsTo(Enum_marca::class, 'marca'); // 'marca' es la clave foránea
    }
}