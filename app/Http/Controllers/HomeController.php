<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InformacionPersonal;
use App\Formacion;
use DB;

class HomeController extends Controller
{
    
    public function index()
    {
        $usuarioactual=\Auth::user();
        $escalafones = \App\Escalafon::where('documento_identificacion','=',$usuarioactual->documento_identificacion)
            ->get();
        $experiencias = \App\ExperienciaInformacion::where('documento_identificacion','=',$usuarioactual->documento_identificacion);
        $idiomas = \App\IdiomaInformacion::where('documento_identificacion','=',$usuarioactual->documento_identificacion)
            ->get();
        
        $informacionpersonal=InformacionPersonal::where('documento_identificacion','=',$usuarioactual->documento_identificacion)
        ->first();
        $correo=DB::table('correos')
        ->select('documento_identificacion','correo_nombre')
        ->where('documento_identificacion','=',$usuarioactual->documento_identificacion)
        ->first();
        $paises=DB::table('paises')
            ->select('nombre_pais','cod_pais')
            ->get();
        $ciuda=0;
        $depto=0;
        $pais=0;
        $string = $informacionpersonal->lugar_nacimiento;
        $token = strtok($string, ".");
        $cont=0;
        while ($token !== false){
            if ($cont==2) {
                $ciuda=$token;
            }if ($cont==1) {
                $depto=$token;
            }if ($cont==0) {
                $pais=$token;
            }
            $cont++;
            $token = strtok(".");
        } 
        $ciudad=DB::table('ciudades')
        ->select('cod_ciudad','nombre_ciudad','cod_departamento')
        ->where('cod_ciudad',"=",$ciuda)
        ->first();
        $departamentos=DB::table('departamentos')
            ->select('cod_departamento','nombre_departamento','cod_pais')
            ->where('cod_departamento',"=",$depto)
            ->first();
        $formaciones = Formacion::where('documento_identificacion','=',$usuarioactual->documento_identificacion)
            ->get();
        return view('home',["informacionpersonal"=>$informacionpersonal,
            "usuario"=> $usuarioactual,
            "correo"=> $correo,
            "departamento"=>$departamentos,
            "paises"=>$paises,
            "ciudad"=>$ciudad,
            "escalafones"=>$escalafones,
            "experiencias"=>$experiencias,
            "idiomas"=>$idiomas,
            "formaciones" => $formaciones,
            "pais"=>$pais]);
    }
}
