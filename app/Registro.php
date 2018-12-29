<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table='registros';
    public $timestamps = false;
    protected $fillable=['id',
    'nombre'
    ];
}
