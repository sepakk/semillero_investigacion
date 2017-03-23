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

    public function tipo()
    {
        return $this->belongsTo('App\Productividad', 'cod_produccion', 'cod_produccion');
    }

}