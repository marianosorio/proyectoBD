<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enum_marca extends Model
{
    use HasFactory;

    protected $table = 'enum_marcas'; 
    protected $primaryKey = 'marca';
    public $incrementing = false;
    protected $keyType = 'string'; 
    protected $fillable = ['marca'];
    public $timestamps = false;

    public function modelos(){
        return $this->hasMany(Modelo::class, 'marca', 'marca');
    }
}