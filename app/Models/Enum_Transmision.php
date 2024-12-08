<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enum_Transmision extends Model
{
    use HasFactory;

    protected $table = 'enum_transmision'; 
    protected $primaryKey = 'transmision';
    public $incrementing = false;
    protected $keyType = 'string'; 
    protected $fillable = ['transmision'];
    public $timestamps = false;
}