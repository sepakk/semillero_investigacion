<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
    public function setAnexoAttribute($path){
            $hora=str_replace(":", "-", Carbon::now('America/Bogota')->toTimeString().Carbon::now('America/Bogota')->toDateString());
            $this->attributes['anexo'] =$hora.$path->getClientOriginalName();
            $name =$hora.$path->getClientOriginalName();
            \Storage::disk('public')->put($name,\File::get($path));
    }
}
