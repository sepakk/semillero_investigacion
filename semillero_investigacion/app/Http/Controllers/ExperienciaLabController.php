<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ExperienciaLabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exps = \ExperienciaLab::all();
        return view('exper.index')->with($exps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exper.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'entidad'=>'required',
            'direccion_entidad'=>'required',
            'cod_ciudad'=>'required',
            'telefono'=>'required',
            'correo_electronico'=>'required',
            'fecha_inicio'=>'required',
            'fecha_retiro'=>'required',
            ]);
        $input=$request->all();
        ExperienciaLab::create($input);
        Session::flash('flash_message','Experiencia creada satisfactoriamente');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $expe=\ExperienciaLab::findOrFail($id);

        return view('exper.show')->with($expe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $expe=\ExperienciaLab::findOrFail($id);

        return view('exper.edit')->with($expe);
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
        $expe=\ExperienciaLab::findOrFail($id);
        $this->validate($request,[
            'entidad'=>'required',
            'direccion_entidad'=>'required',
            'cod_ciudad'=>'required',
            'telefono'=>'required',
            'correo_electronico'=>'required',
            'fecha_inicio'=>'required',
            'fecha_retiro'=>'required',
            ]);
        $input=$request->all();
        
        $expe->fill($input)->save();

        Session::flash('flash_message','Experiencia creada satisfactoriamente');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expe=\ExperienciaLab::findOrFail($id);
        $expe->delete();
        Session::flash('flash_message', 'Experiencia borrado satisfactoriamente');
        return redirect()->view('exper.index');
    }
}
