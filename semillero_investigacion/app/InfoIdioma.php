<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoIdioma extends Model
{
    protected $table='informacion_idioma';

    protected $primaryKey='documento_identificacion, cod_idioma';

    public $timestamps=false;

    protected $fillable=[
    'documento_identificacion',
    'habla',
    'cod_idioma',
    'lectura',
    'escritura'
    ];

    protected $guarded =[
    ];
}
