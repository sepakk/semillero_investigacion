<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departametos extends Model
{
    protected $table = 'departamentos';

    protected $fillable = ['cod_departamento','nombre_departamento'];
}
