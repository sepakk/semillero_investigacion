<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InformacionPersonal;
use App\Ciudades;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\InformacionPersonalFormRequest;
use DB;

class InformacionPersonalController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $usuarioactual=\Auth::user();
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
            ->select('cod_departamento',strtolower('nombre_departamento'),'cod_pais')
            ->where('cod_departamento',"=",$depto)
            ->first();
        return view('informacion_personal.show',["informacionpersonal"=>$informacionpersonal,"usuario"=> $usuarioactual,"correo"=> $correo,"departamento"=>$departamentos,"paises"=>$paises,"ciudad"=>$ciudad,"pais"=>$pais]);
    }

    public function show(){
        $usuarioactual=\Auth::user();
        $informacionpersonal=DB::table('informacion_personal')
        ->select('documento_identificacion','nombre','apellidos','genero','estado_civil','nacionalidad','residencia','libreta_militar','cod_libreta','fecha_nacimiento','lugar_nacimiento','direccion')
        ->where('documento_identificacion','=',$usuarioactual->documento_identificacion)
        ->first();
  
        $ciuda=0;
        $string = $informacionpersonal->lugar_nacimiento;
        $token = strtok($string, ".");
        $cont=0;
        while ($token !== false){
            if ($cont==2) {
                $ciuda=$token;
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
            ->orderBy('nombre_departamento','asc')
            ->get();
        $paises=DB::table('paises')
            ->select('nombre_pais','cod_pais')
            ->orderBy('nombre_pais','asc')
            ->get();
        return view("informacion_personal.edit",["informacionpersonal"=>$informacionpersonal,"departamentos"=>$departamentos,"paises"=>$paises,"ciudad"=>$ciudad]);
    }
    /*public function show()
    {
    	$usuarioactual=\Auth::user();
        $informacionpersonal=DB::table('informacion_personal')
        ->select('documento_identificacion','nombre','apellidos','genero','estado_civil','nacionalidad','residencia','libreta_militar','cod_libreta','fecha_nacimiento','lugar_nacimiento','direccion')
        ->where('documento_identificacion','=',$usuarioactual->documento_identificacion)
        ->first();
        $correo=DB::table('correos')
        ->select('documento_identificacion','correo_nombre')
        ->where('documento_identificacion','=',$usuarioactual->documento_identificacion)
        ->first();

        return view('informacion_personal.show',["informacionpersonal"=>$informacionpersonal,"usuario"=> $usuarioactual,"correo"=> $correo]);
    }*/

    /*public function store (InformacionPersonalFormRequest $request)
    {
        try {
            DB::beginTransaction();
            
            $informacionpersonal=new InformacionPersonal;
            $informacionpersonal->documento_identificacion=$request->get('documento_identificacion');
            $informacionpersonal->nombre=$request->get('nombre');
            $informacionpersonal->apellidos=$request->get('apellidos');
            $informacionpersonal->genero=$request->get('genero');
            $informacionpersonal->nacionalidad=$request->get('nacionalidad');
            $informacionpersonal->residencia=$request->get('residencia');
            $informacionpersonal->libreta_militar=$request->get('libreta_militar');
            $informacionpersonal->cod_libreta=$request->get('cod_libreta');
            $informacionpersonal->fecha_nacimiento=$request->get('fecha_nacimiento');
            $informacionpersonal->lugar_nacimiento=$request->get('lugar_nacimiento');
            $informacionpersonal->direccion=$request->get('direccion');
            $informacionpersonal->estado_civil=$request->get('estado_civil');

            if (Input::hasFile('file')){
            $file=Input::file('file');
            $file->move(public_path().'/imagenes/perfil/',$file->getClientOriginalName());
            $informacionpersonal->imagen=$file->getClientOriginalName();
        }
            $informacionpersonal->save();

            $telefono=$request->get('telefono');
            $correo=$request->get('correo');
            $pais=$request->get('pais');
            $departamento=$request->get('departamento');
            $ciudad=$request->get('ciudad');

            $cont=0;

            while ($cont < count($idarticulo)) {
                $telefono=new Telefono();
                $telefono->documento_identificacion=$informacionpersonal->documento_identificacion;
                $telefono->numero=$telefono;
                $telefono->save();

                $correo=new Correo();
                $correo->documento_identificacion=$informacionpersonal->documento_identificacion;
                $correo->correo_nombre=$telefono;
                $correo->save();
                $cont=$cont+1;
            }
            DB::commit();
            
        } catch (Exception $e) {
            DB::rollback();
        }
        return Redirect::to('');

    }*/

    public function update(InformacionPersonalFormRequest $request,$id)
    {
            $informacionpersonal=InformacionPersonal::findOrFail($id);
            $informacionpersonal->nombre=$request->get('nombre');
            $informacionpersonal->apellidos=$request->get('apellidos');
            $informacionpersonal->genero=$request->get('genero');
            $informacionpersonal->nacionalidad=$request->get('nacionalidad');
            $informacionpersonal->residencia=$request->get('residencia');

            if (Input::hasFile('file')){
            $file=Input::file('file');
            $file->move(public_path().'/imagenes/libretas/',$file->getClientOriginalName());
            $informacionpersonal->libreta_militar=$file->getClientOriginalName();
            }
            $informacionpersonal->cod_libreta=$request->get('cod_libreta');
            $informacionpersonal->fecha_nacimiento=$request->get('fecha_nacimiento');
            if($request->get('país') == '39')
                $informacionpersonal->lugar_nacimiento=$request->get('país').".".$request->get('departamento').".".$request->get('ciudad');
            else
                $informacionpersonal->lugar_nacimiento=$request->get('país').".0.0";
            $informacionpersonal->direccion=$request->get('direccion');
            $informacionpersonal->estado_civil=$request->get('estado_civil');
            //echo "país   ".$request->get('país')." depto  ".$request->get('departamento')." ciudad ".$request->get('ciudad');
            $informacionpersonal->update();
        return Redirect::to('/informacion');
    }
    public function getCiudades(Request $request,$id){
        if($request->ajax()){
            $ciudades=Ciudades::ciudades($id);
            return response()->json($ciudades);
        }
    }
}
