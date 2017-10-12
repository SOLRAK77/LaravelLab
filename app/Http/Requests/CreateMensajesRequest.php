<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMensajesRequest extends FormRequest
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
           'txtMensaje' => ['required','max:40']
       ];
    }

    public function mensajes (){
       return [
            'txtMensaje.required' => 'Por favor, escribe tu mensaje',
            'txtMensaje.max' => 'El mensaje no pued e ser mayor a 10'
       ];
    }
}
