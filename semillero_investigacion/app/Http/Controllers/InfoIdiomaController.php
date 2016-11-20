<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InfoIdiomaController extends Controller
{
    'documento_identificacion',
    'habla',
    'lectura',
    'escritura'

    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request)
        {}
    }
    public function create()
    {
        return view(".create");
    }
    public function store (InfoIdiomaFormRequest $request)
    {
        $infoidioma=new InfoIdioma;
        $infoidioma->documento_identificacion=$request->get('documento_identificacion');
        $infoidioma->cod_idioma='cod_idioma';
        $infoidioma->habla=$request->get('habla');
        $infoidioma->lectura='lectura';
        $infoidioma->lectura='escritura';
        $infoidioma->save();
        return Redirect::to('almacen/categoria');

    }
    public function show($id)
    {
        return view("almacen.categoria.show",["categoria"=>Categoria::findOrFail($id)]);
    }
    public function edit($id)
    {
        
    }
    public function update(CategoriaFormRequest $request,$id)
    {
        
    }
    public function destroy($id)
    {
        
    }
}
