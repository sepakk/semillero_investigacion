<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEscalafon extends Model
{
    protected $table='tipo_escalafones';

    protected $primaryKey='cod_escalafon';

    public $timestamps=false;

    
     public function escalafones()
    {
        return $this->hasMany('App\Escalafon');
    }
}
