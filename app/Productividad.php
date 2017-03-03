<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productividad extends Model
{
    protected $table='productividades_academicas';

    protected $primaryKey='cod_produccion';

    public $timestamps=false;

    protected $fillable=[
    'cod_produccion',
    'nombre_produccion'
    ];

    protected $guarded =[
    ];
}