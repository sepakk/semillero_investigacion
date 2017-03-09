<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EscalafonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioactual=\Auth::user();
        $escalafones = \App\Escalafon::where('documento_identificacion','=',$usuarioactual->documento_identificacion)
            ->get();
        $informacionpersonal=DB::table('informacion_personal')
        ->select('documento_identificacion','nombre','apellidos','genero','estado_civil','nacionalidad','residencia','libreta_militar','cod_libreta','fecha_nacimiento','lugar_nacimiento','direccion')
        ->where('documento_identificacion','=',$usuarioactual->documento_identificacion)
        ->first();
        return view('escalafon.index', ["informacionpersonal"=>$informacionpersonal,'escalafones'=> $escalafones, 'usuario'=> $usuarioactual]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipos = DB::table('tipo_escalafones')
            ->get();
        $usuarioactual=\Auth::user();
        $escalafon = DB::table('escalafones')
            ->where('documento_identificacion','=',$usuarioactual->documento_identificacion)
            ->get();
        return view('escalafon.create', ['tipos'=> $tipos, 'escalafon'=> $escalafon]);
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
        $tipos = DB::table('tipo_escalafones')
            ->get();
        $usuarioactual=\Auth::user();
        $escalafon = DB::table('escalafones')
            ->where('documento_identificacion','=',$usuarioactual->documento_identificacion)
            ->get();
        return view('escalafon.edit', ['tipos'=> $tipos, 'escalafon'=> $escalafon]);
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
}
