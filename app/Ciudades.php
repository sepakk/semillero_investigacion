<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    protected $table = 'ciudades';

    protected $fillable = ['cod_departamento','nombre_ciudad','cod_ciudad'];

    public static function ciudades($id){
    	return Ciudades::where('cod_departamento','=',$id)
    	->orderBy('nombre_ciudad','asc')
    	->get();
    }
}
