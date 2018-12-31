<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracterizacion extends Model
{
    protected $table = 'caracterizacions';
    protected $fillable = [
        'activo_id', 'amenaza_id', 'probabilidad', 'dimension_D', 'dimension_I', 'dimension_C', 'dimension_A', 'dimension_NR'
    ];
    public function activo(){
        return $this->belongsTo(Activo::class,'activo_id');
    }   //pude tener varios Activos

    public function amenazas(){
        return $this->hasMany('App\Amenaza');
    } 
}
