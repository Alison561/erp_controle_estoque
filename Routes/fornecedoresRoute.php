<?php
use Src\Route as Route;

Route::get('/fornecerdor/cadastro', 'fornecedorController@index');
Route::post('/fornecerdor/cadastro', 'fornecedorController@cadastroFornecedor');

Route::get('/fornecerdores/lista', 'fornecedorController@listaFornecerdores');

Route::get('/fornecedor/editar/{id}', 'fornecedorController@editarFornecerdor');
Route::post('/fornecedor/editar/{id}', 'fornecedorController@postEditarFornecerdor');

Route::get('/fornecedor/atividade/{id}', 'fornecedorController@atividadeFornecerdor');