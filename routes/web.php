<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $links = [
        'https://platzi.com' => 'Pagina de Platzi',
        'https://Laravel.com'=> 'Pagina de Laravel'
    ];

    return view('welcome',['links' => $links]);
});

/*Pagina Acerca de*/
Route::get('/acerca', function () {
    return view('acerca');
});