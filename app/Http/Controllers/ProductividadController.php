<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaProduccion;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\ProductividadInformacion;
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
        $producciones = ProductividadInformacion::where('documento_identificacion','=',$usuarioactual->documento_identificacion)->get();
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
        $usuarioactual=\Auth::user();
        $tipo = Input::get('tipo');
        $fecha = Input::get('fecha');
        for ($i=0; $i < count($tipo); $i++) { 
            $per = new ProductividadInformacion;
            $per->documento_identificacion = $usuarioactual->documento_identificacion;
            $per->cod_categoria = $tipo[$i];
            $per->fecha = $fecha[$i];
            $per->anexo = '';
            $per->save();
        }
        return Redirect::to('produccion');
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
        $per=ProductividadInformacion::findOrFail($id);
        $per->delete();
        return Redirect::to('produccion');
    }

    public function getCategorias(Request $request,$id){
        if($request->ajax()){
            $categorias = CategoriaProduccion::where('cod_produccion','=',$id)->get();
            return response()->json($categorias);
        }
    }
}
