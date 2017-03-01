<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table='correos';

    protected $primaryKey = array('correo_nombre','documento_identificacion');

    public $timestamps=false;

    protected $fillable=[
    'documento_identificacion',
    'correo_nombre',
    ];

    protected $guarded =[
    ];
}
