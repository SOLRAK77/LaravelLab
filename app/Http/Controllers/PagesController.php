<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function welcome (){
        $links = [
            'https://platzi.com' => 'Pagina de Platzi',
            'https://Laravel.com'=> 'Pagina de Laravel'
        ];
    
        return view('welcome',['links' => $links]);
    }

    public function about(){
        return view('acerca');
    }
}
