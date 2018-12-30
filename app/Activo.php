<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    protected $table = 'activos';
    protected $fillable = [
        'n', 'codigo', 'capa_id', 'nombre', 'unidad', 'costo_unitario', 'dimencion_D', 'dimencion_I', 'dimencion_C', 'dimencion_A', 'dimencion_NR'
    ];
    public function capa(){
        return $this->belongsTo(Capa::class, 'capa_id');
    }   //un Activo, puede pertecer a una CAPA
}
