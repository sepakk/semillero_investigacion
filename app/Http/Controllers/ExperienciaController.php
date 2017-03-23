<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\ExperienciaInformacion;
use App\InformacionPersonal;
use App\Ciudades;
use DB;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarioactual=\Auth::user();
        $informacionpersonal=InformacionPersonal::where('documento_identificacion','=',$usuarioactual->documento_identificacion)
        ->first();
        $experiencias = ExperienciaInformacion::where('documento_identificacion','=',$usuarioactual->documento_identificacion)->get();
        return view("experiencia.index", ["informacionpersonal"=>$informacionpersonal, 'usuario'=> $usuarioactual, 'experiencias'=> $experiencias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudad=DB::table('ciudades')
        ->select('cod_ciudad','nombre_ciudad','cod_departamento')
        ->orderBy('nombre_ciudad','asc')
        ->first();
        $departamentos=DB::table('departamentos')
            ->select('cod_departamento','nombre_departamento','cod_pais')
            ->orderBy('nombre_departamento','asc')
            ->get();
        $paises=DB::table('paises')
            ->select('nombre_pais','cod_pais')
            ->orderBy('nombre_pais','asc')
            ->get();
        return view('experiencia.create',["departamentos"=>$departamentos,"paises"=>$paises,"ciudad"=>$ciudad]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarioactual=\Auth::user();
        $experiencia = new ExperienciaInformacion;
        $experiencia->documento_identificacion = $usuarioactual->documento_identificacion;
        $experiencia->cod_experiencia_calificada=Input::get('Cargos');
        $experiencia->entidad=Input::get('Entidad');
        $experiencia->direccion_entidad=Input::get('Dirección');
        $experiencia->cod_ciudad=Input::get('país');
        $experiencia->telefono=Input::get('Telefono');
        $experiencia->correo_electronico=Input::get('Correo');
        //$experiencia->=Input::get('Tipo');
        $experiencia->fecha_inicio=Input::get('Fecha_i');
        $experiencia->fecha_retiro=Input::get('Fecha_r');
        $experiencia->save();
        return Redirect::to('experiencia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experiencia=ExperienciaInformacion::findOrFail($id);
        $experiencia->delete();
        return Redirect::to('experiencia');
    }
    public function getCiudades(Request $request,$id){
        if($request->ajax()){
            $ciudades=Ciudades::ciudades($id);
            return response()->json($ciudades);
        }
    }
}
