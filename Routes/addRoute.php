<?php
use Src\Route as Route;

Route::get('/adicionar', 'addController@index');

Route::get('/historico', 'addController@historico');

Route::get('/adicionar/{id}', 'addController@adicionar');
Route::post('/adicionar/{id}', 'addController@postAdicionar');