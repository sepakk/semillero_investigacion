<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InformacionPersonal;

class AdministradorController extends Controller
{
    public function index()
    {
        $usuarioactual=\Auth::user();
         $informacionpersonal=InformacionPersonal::where('documento_identificacion','=',$usuarioactual->documento_identificacion)
        ->first();
        return view('Administrador.show', ["informacionpersonal"=>$informacionpersonal, 'usuario'=> $usuarioactual]);   
    }
}
