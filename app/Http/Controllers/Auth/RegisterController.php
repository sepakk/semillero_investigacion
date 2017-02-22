<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Http\Requests;
use App\InformacionPersonal;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\InformacionPersonalFormRequest;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        try {
            DB::beginTransaction();
            
            $informacionpersonal=new InformacionPersonal;
            $informacionpersonal->documento_identificacion=$data['documento_identificacion'];
            $informacionpersonal->nombre=$data['name'];
            $informacionpersonal->apellidos=$data['apellidos'];
            DB::commit();
            
        } catch (Exception $e) {
            DB::rollback();
        }    
        return User::create([
            'name' => $data['name'],
            'apellidos' => $data['apellidos'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
