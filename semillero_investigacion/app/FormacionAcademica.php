<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormacionAcademica extends Model
{
    protected $table='formaciones_academicas';

    protected $primaryKey='cod_formacion';

    public $timestamps=false;

    protected $fillable=[
    'modalidad_academica',
    'programa_academico',
    'no_semestres',
    'graduado',
    'titulo_obtenido',
    'fecha_terminacion',
    'no_targeta_profesional',
    'documento_identificacion'
    ];

    protected $guarded =[
    ];
}
