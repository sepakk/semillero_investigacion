<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\InformacionPersonal;
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

        return view('informacion_personal.show',["informacionpersonal"=>$informacionpersonal,"usuario"=> $usuarioactual,"correo"=> $correo]);
    }

    public function create()
    {

    	$usuarioactual=\Auth::user();
        $informacionpersonal=DB::table('informacion_personal')->select('documento_identificacion','nombre','apellidos','genero','estado_civil','nacionalidad','residencia','libreta_militar','cod_libreta','fecha_nacimiento','lugar_nacimiento','direccion')
        ->where('documento_identificacion','=',$usuarioactual->documento_identificacion)
        ->first();
        $ciudades=DB::table('ciudades')
            ->select(DB::raw('nombre_ciudad'))
            ->get();
        $departamentos=DB::table('departamentos')
            ->select('cod_departamento','nombre_departamento')
            ->get();
        $paises=DB::table('paises')
            ->select('nombre_pais','cod_pais')
            ->orderBy('nombre_pais','asc')
            ->get();
        return view("informacion_personal.create",["informacionpersonal"=>$informacionpersonal,"ciudades"=>$ciudades,"departamentos"=>$departamentos,"paises"=>$paises]);
    }

    public function store (InformacionPersonalFormRequest $request)
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

    }
    public function edit($id)
    {
    	$informacionpersonal=InformacionPersonal::findOrFail($id);
    	$informacionpersonal=DB::table('informacion_personal')->get();
        return view(".edit",["informacionpersonal"=>$informacionpersonal]);
    }

    public function update(InformacionPersonalFormRequest $request,$id)
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
            $informacionpersonal->update();
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
//revisar
        return Redirect::to('');
    }
    public function destroy($id)
    {
        //revisar
        $informacionpersonal=InformacionPersonal::findOrFail($id);
        return Redirect::to('');
    }
}
