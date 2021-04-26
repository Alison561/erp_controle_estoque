<?php
use Src\Route as Route;

Route::get('/retirada', 'retiradaController@index');

Route::get('/retirada/{id}', 'retiradaController@retirada');
Route::post('/retirada/{id}', 'retiradaController@postRetirada');