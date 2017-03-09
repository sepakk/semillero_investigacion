<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escalafon extends Model
{
    protected $table='escalafones';

    protected $primaryKey='cod_escalafon';

    public $timestamps=false;

    protected $fillable=[
    'tipo_escalafon',
    'anexo',
    'documento_identificacion'
    ];

    protected $guarded =[
    ];

     public function tipo()
    {
        return $this->belongsTo('App\TipoEscalafon', 'tipo_escalafon', 'cod_escalafon');
    }
}
