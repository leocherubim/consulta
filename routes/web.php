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

Route::get('/', 'PacientesController@index');
Route::get('/cadastrar', 'PacientesController@cadastrar');
Route::post('/paciente/registrado', 'PacientesController@efetuarCadastro');
Route::get('/editar/{id}', 'PacientesController@editar');
Route::post('/paciente/atualizado/{id}', 'PacientesController@efetuarAtualizacao');
Route::get('/deletar/{id}', 'PacientesController@deletar');
