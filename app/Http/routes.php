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
    
Route::get('/reporteinc','incubadora@reporteinc');

Route::get('/desactivainc /{id_incubadora}','incubadora@desactivainc')->name('desactivainc');

Route::get('/modificain/{id_incubadora}','incubadora@modificain')->name('modificain');

Route::POST('/modificaincu','incubadora@modificaincu')->name('modificaincu');

Route::get('/restaurainc/{id_incubadora}','incubadora@restaurainc')->name('restaurainc');

Route::get('/efisicainc/{id_incubadora}','incubadora@efisicainc')->name('efisicainc');

//Rutas huevos
Route::get('/altahuev','huevo@altahuev');

Route::POST('/guardahuev','huevo@guardahuev')->name('guardahuev');

Route::get('/reportehuevo','huevo@reportehuevo');

Route::get('/desactivahu /{id_especie}','huevo@desactivahu')->name('desactivahu');

Route::get('/modificahu/{id_especie}','huevo@modificahu')->name('modificahu');

Route::POST('/modificahuevo','huevo@modificahuevo')->name('modificahuevo');

Route::get('/restaurahu/{id_especie}','huevo@restaurahu')->name('restaurahu');

Route::get('/efisicahu/{id_especie}','huevo@efisicahu')->name('efisicahu');

//Rutas Lotes
Route::get('/altalote','lote@altalote');

Route::POST('/guardalote','lote@guardalote')->name('guardahuev');

Route::get('/reportelote','lote@reportelote');

Route::get('/desactivalot /{id_lote}','lote@desactivalot')->name('desactivalot');

Route::get('/modificalote/{id_lote}','lote@modificalote')->name('modificalote');

Route::POST('/modificalot','lote@modificalot')->name('modificalot');

Route::get('/restauralot/{id_lote}','lote@restauralot')->name('restauralot');

Route::get('/eliminalote/{id_lote}','lote@eliminalote')->name('eliminalote');
