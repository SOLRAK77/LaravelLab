<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\mensajes;
use \App\Http\Requests\CreateMensajesRequest;

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

    public function create(CreateMensajesRequest $param)
    {
        /*
        $this->validate($param,
        ],
        [
            'txtMensaje.required' => 'Por favor, escribe tu mensaje',
            'txtMensaje.max' => 'El mensaje no pued e ser mayor a 10'
        ]
        );

        //dd($param->all());
        return "Creado.";
        */
        $mensaje = mensajes::create(
            [
            'mensaje' => $param->input('txtMensaje'),
            'image' => 'https://lorempixel.com/600/338?'.mt_rand(0,1000)
            ]
        );

        return redirect('/mensajes/'. $mensaje->id);
    }
}
