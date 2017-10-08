<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function welcome (){
        $mensajes = [
                [
                    'ID'=> 1,
                    'CONTENIDO'=>'Este es el Mensaje 1',
                    'IMAGE'=>'http://lorempixel.com/600/338?1'                    
                ],
                [
                    'ID'=> 2,
                    'CONTENIDO'=>'Este es el Mensaje 2',
                    'IMAGE'=>'http://lorempixel.com/600/338?2'                    
                ],
                [
                    'ID'=> 3,
                    'CONTENIDO'=>'Este es el Mensaje 3',
                    'IMAGE'=>'http://lorempixel.com/600/338?3'                    
                ],
                [
                    'ID'=> 4,
                    'CONTENIDO'=>'Este es el Mensaje 4',
                    'IMAGE'=>'http://lorempixel.com/600/338?4'                    
                ],
            ];        
    
        return view('welcome',['mensajes' => $mensajes]);
    }

    public function about(){
        return view('acerca');
    }
}
