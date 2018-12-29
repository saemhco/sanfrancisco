<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capa extends Model
{
    protected $table = 'capas';
    protected $fillable = [
        'capa', 'descripcion', 'descripcion'
    ];
    public function activos()
    {
        return $this->hasMany('App\Activos');
    }   //todo esto indica que una CAPA, pude tener varios Activos
}
