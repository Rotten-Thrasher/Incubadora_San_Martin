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

//Rutas Clientes
Route::get('/altacli','clientesinc@altaclientes');

Route::POST('/guardarcli','clientesinc@guardarcli')->name('guardarcli');

//Rutas Incubadora
Route::get('/altainc','incubadora@altaincu');

Route::POST('/guardainc','incubadora@guardainc')->name('guardainc');

//Ruta usuario

Route::get('/altausu','usuario@altausu');

Route::POST('/guardausu','usuario@guardausu')->name('guardausu');

//Rutas huevos
Route::get('/altahuev','huevo@altahuev');

Route::POST('/guardahuev','huevo@guardahuev')->name('guardahuev');