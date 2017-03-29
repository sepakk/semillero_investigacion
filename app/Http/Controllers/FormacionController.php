<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\NivelInstitucion;
use App\ModalidadFormacion;
use App\Formacion;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
class FormacionController extends Controller
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
        $formaciones = \App\Formacion::where('documento_identificacion','=',$usuarioactual->documento_identificacion)
            ->get();
         return view('formacion.index', ["informacionpersonal"=>$informacionpersonal, 'usuario'=> $usuarioactual, 'formaciones' => $formaciones]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $niveles = NivelInstitucion::all();
        $modalidades = ModalidadFormacion::all();
        return view('formacion.create', ['niveles'=> $niveles,'modalidades'=> $modalidades]);
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
        $nombre = Input::get('nombre');
        $institucion = Input::get('institucion');
        $nivel = Input::get('nivel');
        $modalidad = Input::get('modalidad');
        $semestres = Input::get('semestres');
        $graduado = Input::get('graduado');
        $titulo = Input::get('titulo');
        $tarjeta = Input::get('tarjeta');
        $fecha = Input::get('fecha');
        $certificado = Input::file('certificado');
        for ($i=0; $i < count($nombre); $i++) { 
            $per = new Formacion;
            $per->documento_identificacion = $usuarioactual->documento_identificacion;
            $per->cod_nivel = $nivel[$i];
            $per->cod_modalidad = $modalidad[$i];
            $per->programa_academico = $nombre[$i];
            $per->nombre_institucion = $institucion[$i];
            $per->no_semestres = $semestres[$i];
            if($graduado[$i] == "si"){
                $per->graduado = 1;
                $per->titulo_obtenido = $titulo[$i];
                $per->no_tarjeta_profesional = $tarjeta[$i];
                $per->fecha_terminacion = $fecha[$i];
                
                if (Input::hasFile('anexo')){
                try { // catch file not found errors
                    $path=$certificado[$i];
                    $hora=str_replace(":", "-", Carbon::now('America/Bogota')->toTimeString().Carbon::now('America/Bogota')->toDateString());
                    $this->attributes['anexo'] =$hora.$path->getClientOriginalName();
                    $name =$hora.$path->getClientOriginalName();
                    \Storage::disk('Produccion')->put($name,\File::get($certificado[$i]));
                    $per->$certificado = $name;
                } catch (Illuminate\Filesystem\FileNotFoundException $exception) {
                    die ('Bad File');
                }
            }
            }
            else{
                $per->graduado = 0;
                $per->titulo_obtenido = '';
                $per->no_tarjeta_profesional = '';
                $per->fecha_terminacion = '';
                $per->$certificado = '';

            }
            $per->save();
        }
        return Redirect::to('formacion');
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
        $forma=Formacion::findOrFail($id);
        $forma->delete();
        return Redirect::to('formacion');
    }
}
