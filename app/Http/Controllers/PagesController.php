<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mensajes;

class PagesController extends Controller
{
    //
    public function welcome (){
        $mensajes = mensajes::all();
        return view('welcome',['mensajes' => $mensajes]);
    }

    public function about(){
        return view('acerca');
    }
}
