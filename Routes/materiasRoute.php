<?php
use Src\Route as Route;

Route::get('/', 'indexController@index');

Route::get('/material/cadastro', 'materiaisController@index');
Route::post('/material/cadastro', 'materiaisController@cadastroMaterias');

Route::get('/materiais/lista', 'materiaisController@listaMateriais');

Route::get('/materiais/editar/{id}', 'materiaisController@editarMateriais');
Route::post('/materiais/editar/{id}', 'materiaisController@postEditarMateriais');