<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AdministradorController extends Controller
{
    public function index(Request $request)
    {
        if ($request){
                $query=trim($request->get('searchText'));
                $usuarios = DB::table('users') 
                ->orwhere('name','LIKE','%'.$query.'%')->where('tipoUsuario','=','2')
                ->orwhere('apellidos','LIKE','%'.$query.'%')
                ->where('tipoUsuario','=','2')
                ->orwhere('documento_identificacion','LIKE','%'.$query.'%')
                ->where('tipoUsuario','=','2')
                ->orderBy('name','asc')
                ->paginate(2);
                return view('admin.index', ['usuarios' => $usuarios,"searchText"=>$query]);
        }
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
    }
}
