<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table='idiomas';

    protected $primaryKey='cod_idioma';

    public $timestamps=false;

    protected $fillable=[
    'cod_idioma',
    'nombre_idioma'
    ];

    protected $guarded =[
    ];
}