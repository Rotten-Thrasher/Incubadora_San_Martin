<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejemplo','lote@ejemplo');

//Rutas Clientes
Route::get('/altacli','clientesinc@altaclientes');

Route::POST('/guardarcli','clientesinc@guardarcli')->name('guardarcli');

Route::get('/reportecli','clientesinc@reportecli');

Route::get('/eliminacli /{id_cli}','clientesinc@eliminacli')->name('eliminacli');

Route::get('/modificaclie/{id_cli}','clientesinc@modificaclie')->name('modificaclie');

Route::POST('/modificacli','clientesinc@modificacli')->name('modificacli');

Route::get('/restauracli/{id_cli}','clientesinc@restauracli')->name('restauracli');

Route::get('/efisicacli/{id_cli}','clientesinc@efisicacli')->name('efisicacli');

//Ruta usuario

Route::get('/altausu','usuario@altausu');

Route::POST('/guardausu','usuario@guardausu')->name('guardausu');

Route::get('/reporteusu','usuario@reporteusu');

Route::get('/desactivausu /{id_usu}','usuario@desactivausu')->name('desactivausu');

Route::get('/modificausu/{id_usu}','usuario@modificausu')->name('modificausu');

Route::POST('/modificausuario','usuario@modificausuario')->name('modificausuario');

Route::get('/restaurausu/{id_usu}','usuario@restaurausu')->name('restaurausu');

Route::get('/eliminausu/{id_usu}','usuario@eliminausu')->name('eliminausu');


//Rutas Incubadora
Route::get('/altainc','incubadora@altaincu');

Route::POST('/guardainc','incubadora@guardainc')->name('guardainc');

//Rutas huevos
Route::get('/altahuev','huevo@altahuev');

Route::POST('/guardahuev','huevo@guardahuev')->name('guardahuev');

//Rutas Lotes
Route::get('/altalote','lote@altalote');

Route::POST('/guardalote','lote@guardalote')->name('guardahuev');