<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enum_color extends Model
{
    use HasFactory;

    protected $table = 'enum_color'; 
    protected $primaryKey = 'color';
    public $incrementing = false;
    protected $keyType = 'string'; 
    protected $fillable = ['color'];
    public $timestamps = false;
}