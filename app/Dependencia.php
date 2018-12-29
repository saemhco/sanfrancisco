<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
   protected $table = 'dependencias';
   protected $fillable = [
        'nombre', 'es_area', 'es_subarea', 'dependencia_id', 'obs'
    ];
    
    public function usuarios(){
        return $this->hasMany('App\User','oficinas_id');
    }
}
