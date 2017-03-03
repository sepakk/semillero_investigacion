<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfeccionamiento extends Model
{
    protected $table='perfeccionamiento_actividades';

    protected $primaryKey='cod_perfeccionamiento';

    public $timestamps=false;

    protected $fillable=[
    'cod_perfeccionamiento',
    'nombre_perfeccionamiento'
    ];

    protected $guarded =[
    ];
}