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

Route::get('/altacli','clientesinc@altaclientes');

Route::POST('/guardarcli','clientesinc@guardaclientes')->name('guardamaestros');

Route::get('/altainc','incubadora@altaincu');

Route::POST('/guardainc','incubadora@guardainc')->name('guardamaestros');