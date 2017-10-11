<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\mensajes;

class MensajesController extends Controller
{
    //
    public function show(mensajes $Mensaje)
    {
        //Ir abuscar el mensaje por ID
        //$Mensaje = mensajes::find($id);
        //Usar view de un
        return view('mensajes.show',['mensaje' => $Mensaje]);
    }

    public function create(Request $param)
    {
        
        $this->validate($param,[
            'txtMensaje'=> ['required','max:14']
        ],
        [
            'txtMensaje.required' => 'Por favor, escribe tu mensaje',
            'txtMensaje.max' => 'El mensaje no pued e ser mayor a 10'
        ]
        );        

        //dd($param->all());
        return "Creado.";
    }
}
