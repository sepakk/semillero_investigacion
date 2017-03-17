<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formacion extends Model
{
    protected $table='formaciones_academicas';

    protected $primaryKey='	cod_formacion';

    public $timestamps=false;

    public function nivel()
    {
        return $this->belongsTo('App\NivelInstitucion', 'cod_nivel', 'cod_nivel');
    }
  
}