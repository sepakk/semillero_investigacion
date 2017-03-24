<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Perfeccionamiento;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class PerfeccionamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioactual=\Auth::user();
        $informacionpersonal=DB::table('informacion_personal')
        ->select('documento_identificacion','nombre','apellidos','genero','estado_civil','nacionalidad','residencia','libreta_militar','cod_libreta','fecha_nacimiento','lugar_nacimiento','direccion')
        ->where('documento_identificacion','=',$usuarioactual->documento_identificacion)
        ->first();
        $perfeccionamientos = \App\Perfeccionamiento::where('documento_identificacion','=',$usuarioactual->documento_identificacion)->get();
        return view('perfeccionamiento.index',['informacionpersonal'=>$informacionpersonal,'usuario'=> $usuarioactual,'perfeccionamientos'=> $perfeccionamientos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("perfeccionamiento.create");
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
        $usuarioactual=\Auth::user();
        $entidad = Input::get('entidad');
        $nombre = Input::get('nombre');
        $intensidad = Input::get('intensidad');
        $puntaje = Input::get('puntaje');
        $fechain = Input::get('fecha-inicio');
        $fechafin = Input::get('fecha-final');
        for ($i=0; $i < count($entidad); $i++) { 
            $per = new Perfeccionamiento;
            $per->documento_identificacion = $usuarioactual->documento_identificacion;
            $per->entidad = $entidad[$i];
            $per->nombre = $nombre[$i];
            $per->puntaje_perfeccionamiento = $puntaje[$i];
            $per->intensidad_horaria = $intensidad[$i];
            $per->fecha_inicio = $fechain[$i];
            $per->fecha_fin = $fechafin[$i];
            $per->save();
        }
        return Redirect::to('perfeccionamiento');
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
        $per=Perfeccionamiento::findOrFail($id);
        $per->delete();
        return Redirect::to('perfeccionamiento');
    }
}
