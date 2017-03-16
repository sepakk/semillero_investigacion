<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelInstitucion extends Model
{
    protected $table='nivel_institucion';

    protected $primaryKey='cod_nivel';

    public $timestamps=false;

}