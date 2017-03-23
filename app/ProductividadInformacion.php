<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductividadInformacion extends Model
{
    protected $table='informacion_categorias';

    protected $primaryKey='cod_info_cat';

    public $timestamps=false;

    public function categoria()
    {
        return $this->belongsTo('App\CategoriaProduccion', 'cod_categoria', 'cod_categoria');
    }

}