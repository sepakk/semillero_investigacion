<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaProduccion;
use DB;
class ProductividadController extends Controller
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
        ->where('documento_identificacion','=',$usuarioactual->documento_identificacion)
        ->first();
        $producciones = \App\Productividad::all();
        return view('produccion.index', ['producciones' => $producciones, 'usuario'=> $usuarioactual, 'informacionpersonal' => $informacionpersonal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $producciones = \App\Productividad::all();
        return view('produccion.create', ['producciones' => $producciones]);
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

    public function getCategorias(Request $request,$id){
        if($request->ajax()){
            $categorias = CategoriaProduccion::where('cod_produccion','=',$id)->get();
            return response()->json($categorias);
        }
    }
}
