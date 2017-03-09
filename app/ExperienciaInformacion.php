<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienciaInformacion extends Model
{
    protected $table='informacion_experiencias';

    protected $primaryKey='cod_info_exp';

    public $timestamps=false;

    public function exp()
    {
        return $this->belongsTo('App\Experiencia', 'cod_experiencia_calificada', 'cod_experiencia_calificada');
    }

    public function ciudad()
    {
        return $this->belongsTo('App\Ciudades', 'cod_ciudad', 'cod_ciudad');
    }
}