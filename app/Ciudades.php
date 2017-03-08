<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    protected $table='ciudades';

    protected $primaryKey='cod_ciudad';


    protected $fillable=[
    'cod_ciudad',
    'nombre_ciudad',
    'cod_departamento'
    ];
    public static function ciudades($id){
    	return Ciudades::where('cod_departamento','=',$id)
    	->get();
    }
}
