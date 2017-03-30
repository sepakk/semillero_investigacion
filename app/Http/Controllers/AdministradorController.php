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
    public function index()
    {
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
    }
}
