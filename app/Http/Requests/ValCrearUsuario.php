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

            'email' => 'required|max:50|unique:usuarios,email,' . $this->route('id'),
            'password' => 'required|max:12|min:10',
            'checkpp' => 'required'

        ];
    }
    public function messages()
    {
        return [

            'email.required' => 'El campo correo es obligatorio',
            'pass.required' => 'El campo contraseña es obligatorio',
            'checkpp.required' => 'Para registrarse, debe aceptar los términos y condiciones',
        ];
    }
}
