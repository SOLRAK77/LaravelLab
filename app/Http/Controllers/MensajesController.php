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
}
