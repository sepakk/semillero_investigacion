<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModalidadFormacion extends Model
{
    protected $table='modalidad_formacion';

    protected $primaryKey='cod_modalidad';

    public $timestamps=false;

}