<?php

namespace App\Http\Controllers;

use App\Puc;
use Input;
use Redirect;
use App\Http\Requests;
use Request;
use Illuminate\Routing\Redirector;
class PerfeccionamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfects = \Perfeccionamiento::all();
        return view('perfec.index')->with($perfects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfec.create');
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
            'fecha_inicio'=>'required',
            'fecha_fin'=>'required',
            'intensidad_horaria'=>'required',
            'puntaje_perfeccionamiento'=>'required',
            ]);
        $input = $request->all();
        Perfeccionamiento::create($input);
        Session::flash('flash_message',"Perfeccionamiento creado satisfactoriamente");
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
        $perfect = \Perfeccionamiento::findOrFail($id);

        return view('perfec.show')->with($perfect);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perfect = \Perfeccionamiento::finOrFail($id);

        return view('perfec.edit')->with($perfect);
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
        $perfect =\Perfeccionamiento::findOrFail($id);
        $this->validate($request,[
            'entidad'=>'required',
            'fecha_inicio'=>'required',
            'fecha_fin'=>'required',
            'intensidad_horaria'=>'required',
            'puntaje_perfeccionamiento'=>'required',
            ]);
        $input = $request->all();

        $perfect->fill($input)->save();

        Session::flash('flash_message',"Perfeccionamiento creado satisfactoriamente");
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
        $perfect = \Perfeccionamiento::finOrFail($id);
        $perfect->delete();
        Session::flash('flash_message', 'Perfeccionamiento borrado satisfactoriamente');
        return redirect()->view('perfec.index');
    }
}
