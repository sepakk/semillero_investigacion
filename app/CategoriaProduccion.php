<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaProduccion extends Model
{
    protected $table='produccion_categorias';

    protected $primaryKey='cod_categoria';

    public $timestamps=false;

    protected $fillable=[
    'cod_categoria',
    'nombre_categoria'
    ];

}