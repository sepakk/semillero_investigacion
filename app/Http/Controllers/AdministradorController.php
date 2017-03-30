<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\InformacionPersonal;
=======
use DB;
use File;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
>>>>>>> 44b4ede3f7a0b05e4e95bd4f4355b8bdfe1002b0

class AdministradorController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $usuarioactual=\Auth::user();
         $informacionpersonal=InformacionPersonal::where('documento_identificacion','=',$usuarioactual->documento_identificacion)
        ->first();
        return view('Administrador.show', ["informacionpersonal"=>$informacionpersonal, 'usuario'=> $usuarioactual]);   
=======
        $usuarios = User::where('tipoUsuario','=','2')->get();
        return view('admin.index', ['usuarios' => $usuarios]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
>>>>>>> 44b4ede3f7a0b05e4e95bd4f4355b8bdfe1002b0
    }
}
