<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Ciudades;

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
        $informacionpersonal=DB::table('informacion_personal')
        ->select('documento_identificacion','nombre','apellidos','genero','estado_civil','nacionalidad','residencia','libreta_militar','cod_libreta','fecha_nacimiento','lugar_nacimiento','direccion')
        ->where('documento_identificacion','=',$usuarioactual->documento_identificacion)
        ->first();
        $experiencias = \App\ExperienciaInformacion::where('documento_identificacion','=',$usuarioactual->documento_identificacion);
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
        //
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
        //
    }
    public function getCiudades(Request $request,$id){
        if($request->ajax()){
            $ciudades=Ciudades::ciudades($id);
            return response()->json($ciudades);
        }
    }
}
