<?php

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

/*
 * Rotas para medicos
 */
// listagem de medicos
Route::get('/medico', 'MedicosController@index');
// formulario de medico
Route::get('/medico/cadastrar', 'MedicosController@cadastrar');
// rota POST para o cadastro das informacoes
Route::post('/medico/registrado', 'MedicosController@efetuarCadastro');
// formulario de edicao de medico
Route::get('/medico/editar/{id}', 'MedicosController@editar');
// rota POST para atualizacao do medico
Route::post('/medico/atualizado/{id}', 'MedicosController@efetuarAtualizacao');
// rota para remocao do medico
Route::get('/medico/deletar/{id}', 'MedicosController@deletar');

/*
 * Rotas para clinica
 */
// listagem de clinicas
Route::get('/clinica', 'ClinicasController@index');
// formulario de clinica
Route::get('/clinica/cadastrar', 'ClinicasController@cadastrar');
// rota POST para o cadastro das informacoes
Route::post('/clinica/registrado', 'ClinicasController@efetuarCadastro');
// formulario de edicao de clinica
Route::get('/clinica/editar/{id}', 'ClinicasController@editar');
// rota POST para atualizacao do clinica
Route::post('/clinica/atualizado/{id}', 'ClinicasController@efetuarAtualizacao');
// rota para remocao do clinica
Route::get('/clinica/deletar/{id}', 'ClinicasController@deletar');