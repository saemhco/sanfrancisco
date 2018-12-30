<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenaza extends Model
{
    protected $table = 'amenazas';
    protected $fillable = [
        'tipo', 'codigo', 'nombre', 'descripcion'
    ];    
}
