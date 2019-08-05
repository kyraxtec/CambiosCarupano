<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValCrearUsuario extends FormRequest
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
            'nombre' => 'required|max:20',
            'email' => 'required|max:50',
            'pass' => 'required|max:12|min:10'
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo correo es obligatorio',
            'pass.required' => 'El campo contraseña es obligatorio'
        ];
    }
}
