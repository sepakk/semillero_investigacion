<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdiomaInformacion extends Model
{
    protected $table='informacion_idioma';

     public function idioma()
    {
        return $this->belongsTo('App\Idioma', 'cod_idioma', 'cod_idioma');
    }
} 