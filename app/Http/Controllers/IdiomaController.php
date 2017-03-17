<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\IdiomaInformacion;
use DB;
class IdiomaController extends Controller
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
        $idiomas = \App\IdiomaInformacion::where('documento_identificacion','=',$usuarioactual->documento_identificacion)
            ->get();
         return view('idioma.index', ["informacionpersonal"=>$informacionpersonal, 'usuario'=> $usuarioactual, 'idiomas' => $idiomas]);  
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idiomas = \App\Idioma::all();
        return view('idioma.create', ["idiomas"=>$idiomas]);
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
        $cod_idioma = Input::get('cod_idioma');
        $habla = Input::get('habla');
        $lectura = Input::get('lectura');
        $escritura = Input::get('escritura');
        for ($i=0; $i < count($cod_idioma); $i++) { 
            $InfoIdioma = new IdiomaInformacion;
            $InfoIdioma->documento_identificacion = $usuarioactual->documento_identificacion;
            $InfoIdioma->cod_idioma = $cod_idioma[$i];
            $InfoIdioma->habla = $habla[$i];
            $InfoIdioma->lectura = $lectura[$i];
            $InfoIdioma->escritura = $escritura[$i];
            $InfoIdioma->save();
        }
        return Redirect::to('idioma');
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
        $infoidioma=IdiomaInformacion::findOrFail($id);
        $infoidioma->delete();
        return Redirect::to('idioma');
    }
}