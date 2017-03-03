<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    protected $table='experiencias_calificadas';

    protected $primaryKey='cod_experiencia_calificada';

    public $timestamps=false;

    protected $fillable=[
    'cod_experiencia_calificada',
    'nombre_experiencia_calificada'
    ];

    protected $guarded =[
    ];
}