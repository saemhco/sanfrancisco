<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    protected $table = 'activos';
    protected $fillable = [
        'n', 'codigo', 'capa_id', 'nombre', 'unidad', 'costo_unitario', 'dimension_D', 'dimension_I', 'dimension_C', 'dimension_A', 'dimension_NR'
    ];
    public function capa(){
        return $this->belongsTo(Capa::class, 'capa_id');
    }   //un Activo, puede pertecer a una CAPA
}
