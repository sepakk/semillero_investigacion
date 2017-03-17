<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdiomaInformacion extends Model
{
    protected $table='informacion_idioma';

    protected $primaryKey='cod_idioma';
    
    public $timestamps=false;

    
    protected $fillable=[
    'documento_identificacion',
    'cod_idioma',
    'habla',
    'lectura',
    'escritura'
    ];
     public function idioma()
    {
        return $this->belongsTo('App\Idioma', 'cod_idioma', 'cod_idioma');
    }
} 