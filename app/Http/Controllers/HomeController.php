<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioactual=\Auth::user();
        $escalafones = \App\Escalafon::where('documento_identificacion','=',$usuarioactual->documento_identificacion)
            ->get();
        $experiencias = \App\ExperienciaInformacion::where('documento_identificacion','=',$usuarioactual->documento_identificacion);
        $idiomas = \App\IdiomaInformacion::where('documento_identificacion','=',$usuarioactual->documento_identificacion)
            ->get();
        
        $informacionpersonal=DB::table('informacion_personal')
        ->select('documento_identificacion','nombre','apellidos','genero','estado_civil','nacionalidad','residencia','libreta_militar','cod_libreta','fecha_nacimiento','lugar_nacimiento','direccion')
        ->where('documento_identificacion','=',$usuarioactual->documento_identificacion)
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
        $string = $informacionpersonal->lugar_nacimiento;
        $token = strtok($string, ".");
        $cont=0;
        while ($token !== false){
            if ($cont==2) {
                $ciuda=$token;
            }if ($cont==1) {
                $depto=$token;
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
        return view('home',["informacionpersonal"=>$informacionpersonal,
            "usuario"=> $usuarioactual,
            "correo"=> $correo,
            "departamento"=>$departamentos,
            "paises"=>$paises,
            "ciudad"=>$ciudad,
            "escalafones"=>$escalafones,
            "experiencias"=>$experiencias,
            "idiomas"=>$idiomas]);
    }
}
