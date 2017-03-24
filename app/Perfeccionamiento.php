<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfeccionamiento extends Model
{
    protected $table='informacion_actividades';

    protected $primaryKey='cod_perfeccionamiento';

    public $timestamps=false;

    protected $guarded =[
    ];

    public function tipo()
    {
        return $this->belongsTo('App\PerfeccionamientoTipo', 'cod_perfeccionamiento', 'cod_perfeccionamiento');
    }
}

