<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capa extends Model
{
    protected $table = 'capas';
    protected $fillable = [
        'capa', 'descripcion', 'categoria'
    ];
    public function activos(){
        return $this->hasMany('App\Activo');
    }   //la CAPA, pude tener varios Activos
}
