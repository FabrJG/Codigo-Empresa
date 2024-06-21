<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cPerNombre' => 'required',
            'cPerApellido' => 'required',
            'cPerDireccion' => 'required',
            'dPerFecNac' => 'required',
            'nPerEdad' => 'required',
            'nPerSueldo' => 'required',
            'nPerEstado' => 'required'
        ];
    }
    public function messages(){
        return[
            'cPerNombre.required' => 'El campo NOMBRE es obligatorio',
            'cPerApellido.required' => 'El campo APELLIDO es obligatorio',
            'cPerDireccion.required' => 'El campo DIRECCIÓN es obligatorio',
            'dPerFecNac.required' => 'El campo FECHA DE NACIMIENTO es obligatorio',
            'nPerEdad.required' => 'El campo EDAD es obligatorio',
            'nPerSueldo.required' => 'El campo SUELDO es obligatorio',
            'nPerEstado.required' => 'El campo ESTADO es obligatorio'
        ];
    }
}
