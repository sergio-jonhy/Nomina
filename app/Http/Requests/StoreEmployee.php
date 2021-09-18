<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployee extends FormRequest
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
        //se colocan las reglas de validacion para cada uno de los campos
        return [
            'codigo' => ['required', 'string', 'size:10'],
            'nombre' => ['required', 'string', 'regex:/^[\pL\s\-]+$/u'],
            'apellido_p' => ['required', 'string', 'regex:/^[\pL\s\-]+$/u'],
            'apellido_m' => ['required', 'string', 'regex:/^[\pL\s\-]+$/u'],
            'correo' => ['required','email:rfc,dns'],
            'tipo_contrato' => ['required', 'string', 'regex:/^[\pL\s\-]+$/u'],
            'estado' => ['required', 'string']
        ];
    }
    //una nueva funcion para cambiar el nombre de los campos en los que estamos validando
    public function attributes()
    {
        return [
            'apellido_p' => 'apellido paterno',
            'apellido_m' => 'apellido materno',
        ];
    }
    //personalizacion del los mensajes evitando confuciones por los numero o signos
    public function messages()
    {
        return [
            'tipo_contrato.regex' => 'Debes introduir nombre de contrato evitando numeros o simbolos ',
            'nombre.regex' => 'Debes introducir un nombre evitando numeros o simbolos',
            'apellido_p.regex' => 'Debes introduir un apellido paterno evitando numeros o simbolos ',
            'apellido_m.regex' => 'Debes introducir un apellido materno evitando numeros o simbolos',
        ];
    }
}
