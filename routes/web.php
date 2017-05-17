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

/*
 * Rotas para pacientes
 */
// listagem de pacientes
Route::get('/', 'PacientesController@index');
// formulario de cadastro
Route::get('/cadastrar', 'PacientesController@cadastrar');
// rota POST para o cadastro das informacoes
Route::post('/paciente/registrado', 'PacientesController@efetuarCadastro');
// formulario de edicao de paciente
Route::get('/editar/{id}', 'PacientesController@editar');
// rota POST para atualizacao do paciente
Route::post('/paciente/atualizado/{id}', 'PacientesController@efetuarAtualizacao');
// rota para remocao do paciente
Route::get('/deletar/{id}', 'PacientesController@deletar');

/*
 * Rotas para atendentes
 */
// listagem de atendentes
Route::get('/atendente', 'AtendentesController@index');
// formulario de atendente
Route::get('/atendente/cadastrar', 'AtendentesController@cadastrar');
// rota POST para o cadastro das informacoes
Route::post('/atendente/registrado', 'AtendentesController@efetuarCadastro');
// formulario de edicao de atendente
Route::get('/atendente/editar/{id}', 'AtendentesController@editar');
// rota POST para atualizacao do atendente
Route::post('/atendente/atualizado/{id}', 'AtendentesController@efetuarAtualizacao');
// rota para remocao do atendente
Route::get('/atendente/deletar/{id}', 'AtendentesController@deletar');
