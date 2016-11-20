<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormacionAcademicaFormRequest extends FormRequest
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
            'modalidad_academica'=>'required|max:30',
            'programa_academico'=>'required|max:50',
            'no_semestres'=>'required|numeric',
            'graduado',
            'titulo_obtenido'=>'max:60',
            'fecha_terminacion',
            'no_targeta_profesional'=>'max:30',
            'documento_identificacion'=>'required|max:30',
        ];
    }
}
