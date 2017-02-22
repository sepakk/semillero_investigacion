<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformacionPersonal extends Model
{
    protected $table='informacion_personal';

    protected $primaryKey='documento_identificacion';

    public $timestamps=false;

    protected $fillable=[
    'documento_identificacion',
    'nombre',
    'apellidos',
    'genero',
    'nacionalidad',
    'residencia',
    'libreta_militar',
    'cod_libreta',
    'fecha_nacimiento',
    'lugar_nacimiento',
    'direccion',
    'estado_civil'
    ];

    protected $guarded =[
    ];
}
