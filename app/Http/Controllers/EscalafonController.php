<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EscalafonFormRequest;
use App\Escalafon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use File;
use Carbon\Carbon;
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
        $usuarioactual=\Auth::user();
        $tipo_escalafon = Input::get('tipo_escalafon');
        $anexo = Input::file('anexo');
        for ($i=0; $i < count($tipo_escalafon); $i++) { 
            $escalafon = new Escalafon;
            $escalafon->documento_identificacion = $usuarioactual->documento_identificacion;
            
            if (Input::hasFile('anexo')){
                $path=$anexo[$i];
                $hora=str_replace(":", "-", Carbon::now('America/Bogota')->toTimeString().Carbon::now('America/Bogota')->toDateString());
                $this->attributes['anexo'] =$hora.$path->getClientOriginalName();
                $name =$hora.$path->getClientOriginalName();
                
                \Storage::disk('public')->put($name,\File::get($anexo[$i]));
                $escalafon->anexo = $name;
            }
            
            $escalafon->tipo_escalafon = $tipo_escalafon[$i];
            $escalafon->save();
        }
        return Redirect::to('escalafones');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipos = DB::table('tipo_escalafones')
            ->get();
        $usuarioactual=\Auth::user();
        $escalafon = DB::table('escalafones')
            ->where('documento_identificacion','=',$usuarioactual->documento_identificacion)
            ->get();
        $escalafon=Escalafon::findOrFail($id);
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
        
        $usuarioactual=\Auth::user();
        $escalafon=Escalafon::findOrFail($id);
            $escalafon->documento_identificacion = $usuarioactual->documento_identificacion;
            
            if (Input::hasFile('anexo')){
                File::delete(public_path('Escalafon/certificaciones/').$escalafon->anexo);
                $path=Input::file('anexo');
                $hora=str_replace(":", "-", Carbon::now('America/Bogota')->toTimeString().Carbon::now('America/Bogota')->toDateString());
                $this->attributes['anexo'] =$hora.$path->getClientOriginalName();
                $name =$hora.$path->getClientOriginalName();
                \Storage::disk('public')->put($name,\File::get($path));
                $escalafon->anexo = $name;
            }
            
            $escalafon->tipo_escalafon = Input::get('tipo_escalafon');
        $escalafon->update();
        return Redirect::to('escalafones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $escalafon=Escalafon::findOrFail($id);
        File::delete(public_path('Escalafon/certificaciones/').$escalafon->anexo);
        $escalafon->delete();
        return Redirect::to('escalafones');
    }
}
