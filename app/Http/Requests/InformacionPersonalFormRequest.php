<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformacionPersonalFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'documento_identificacion'=>'required|numeric|max:30',
            'nombre'=>'required|max:40',
            'apellidos'=>'required|max:40',
            'genero',
            'nacionalidad',
            'residencia',
            'libreta_militar',
            'cod_libreta',
            'fecha_nacimiento'=>'required',
            'lugar_nacimiento'=>'required',
            'direccion'=>'required|max:100',
            'estado_civil',
        ];
    }
}
