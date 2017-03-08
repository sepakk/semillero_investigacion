<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departametos extends Model
{
     protected $table='departamentos';

    protected $primaryKey='cod_departamento';


    protected $fillable=[
    'nombre_departamento',
    'cod_departamento'
    ];
}
