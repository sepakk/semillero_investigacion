<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\FormacionAcademica;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\FormacionAcademicaFormRequest;
use DB;

class FormacionAcademicaController extends Controller
{
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
    	$formacionacademica=DB::table('formacionesacademicas')
        ->get();
        return view(".create",["formacionacademica"=>$formacionacademica]);
    }

    public function store (FormacionAcademicaFormRequest $request)
    {
        $formacionacademica=new FormacionAcademica;
        $formacionacademica->modalidad_academica=$request->get('modalidad_academica');
        $formacionacademica->programa_academico=$request->get('programa_academico');
        $formacionacademica->no_semestres=$request->get('no_semestres');
        $formacionacademica->graduado=$request->get('graduado');
        $formacionacademica->titulo_obtenido=$request->get('titulo_obtenido');

        $formacionacademica->fecha_terminacion=$request->get('fecha_terminacion');

        $formacionacademica->no_tarjeta_profesional=$request->get('no_tarjeta_profesional');
        $formacionacademica->documento_identificacion=$request->get('documento_identificacion');
        $formacionacademica->save();
        return Redirect::to('');

    }

    public function show($id)
    {
        return view(".show",["articulo"=>FormacionAcademica::findOrFail($id)]);
    }

    public function edit($id)
    {
    	$formacionacademica=FormacionAcademica::findOrFail($id);
        return view(".edit",["formacionacademica"=>$formacionacademica,""=>]);
    }

    public function update(FormacionAcademicaFormRequest $request,$id)
    {
        $formacionacademica=FormacionAcademica::findOrFail($id);
        $formacionacademica->modalidad_academica=$request->get('modalidad_academica');
        $formacionacademica->programa_academico=$request->get('programa_academico');
        $formacionacademica->no_semestres=$request->get('no_semestres');
        $formacionacademica->graduado=$request->get('graduado');
        $formacionacademica->titulo_obtenido=$request->get('titulo_obtenido');

        $formacionacademica->fecha_terminacion=$request->get('fecha_terminacion');

        $formacionacademica->no_tarjeta_profesional=$request->get('no_tarjeta_profesional');
        $formacionacademica->update();
        return Redirect::to('');
    }

    public function destroy($id)
    {
        $formacionacademica=FormacionAcademica::findOrFail($id);;
        return Redirect::to('');
    }
}
