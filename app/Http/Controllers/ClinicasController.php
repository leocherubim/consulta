<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

/**
 * Classe responsavel por controlar as requisicoes do usuario
 * para a manipulacao das clinicas no banco de dados e
 * para o redirecionamento das paginas HTML.
 * Neste Controller estarao presentes os metodos
 * de CRUD referente a clinica.
 */
class ClinicasController extends Controller
{
    /**
	 * Acao responsavel por redirecionar para a pagina
	 * inicial da listagem de clinica
	 */
    public function index()
    {
    	// executando o script de select das clinicas
    	$clinicas = DB::select('SELECT * FROM Clinica');

    	// redirecionar para a pagina index com a listagem das clinicas
    	return view('clinicas.index', compact('clinicas'));
    }

    /**
     * Acao responsavel por cadastrar a clinica
     */
    public function cadastrar()
    {
        // redirecionar para o formulario de cadastro
    	return view('clinicas.cadastrar');
    }

    /**
     * Metodo responsavel por receber as requisicoes
     * do formulario. Os dados do formulario estarao
     * presentes na variavel $request
     */
    public function efetuarCadastro(Request $request)
    {
    	// UF da Clinica
    	$uf = $request->input('uf');
    	// Telefone da Clinica
    	$telefone = $request->input('telefone');
    	// Nome da Clinica
    	$nome = $request->input('nome');
    	// Endereco da Clinica
    	$endereco = $request->input('endereco');
    	// CEP da Clinica
    	$cep = $request->input('cep');
    	// Email da Clinica
    	$email = $request->input('email');
    	// CNPJ da Clinica
    	$cnpj = $request->input('cnpj');

    	// Executando o script de insercao de dados
    	DB::insert('INSERT INTO Clinica (UF, Telefone, NomeClinica, Endereco, CEP, Email, CNPJ)'
    				.'VALUES (?,?,?,?,?,?,?)', 
    				array($uf, $telefone, $nome, $endereco, $cep, $email, $cnpj)
    	);

    	// redirecionando para a pagina inicial da Clinica
    	return redirect('/clinica');
    }

    /**
     * Formulario de edicao do Clinica. A Clinica
     * e recuperado pela chave primaria
     */
    public function editar($id)
    {
    	// Script de select para recuperar a Clinica pela chave primaria.
    	// O retorno sera um vetor com uma posicao e sera chamado a posicao 0
    	$retornoListaClinica = DB::select('SELECT * FROM Clinica WHERE IdClinica = ?', array($id));
        // o script retorna uma lista com apenas a unica clinica encontrado
        // e esta clinica e passado como a posicao 0 da lista
        $clinica = $retornoListaClinica[0];
    	
    	// redirecinar para a pagina com o formulario de edicao
    	return view('clinicas.editar', compact('clinica'));
    }

    /**
     * Recupera os dados da edicao da Clinica
     */
    public function efetuarAtualizacao(Request $request, $id)
    {
    	// UF da Clinica
    	$uf = $request->input('uf');
    	// Telefone da Clinica
    	$telefone = $request->input('telefone');
    	// Nome da Clinica
    	$nome = $request->input('nome');
    	// Endereco da Clinica
    	$endereco = $request->input('endereco');
    	// CEP da Clinica
    	$cep = $request->input('cep');
    	// Email da Clinica
    	$email = $request->input('email');
    	// CNPJ da Clinica
    	$cnpj = $request->input('cnpj');

    	// Executando o script para atualizacoes dos dados do Clinica
    	DB::insert('UPDATE Clinica SET '
    				.'UF = ?, Telefone = ?, NomeClinica = ?, Endereco = ?, CEP = ?, Email = ?, CNPJ = ? '
    				.'WHERE IdClinica = ?', 
    				array($uf, $telefone, $nome, $endereco, $cep, $email, $cnpj, $id)
    	);

    	// redirecionando para a pagina inicial de Clinica
    	return redirect('/clinica');
    }

    /**
     * Removendo a Clinica a partir da chave primaria
     */
    public function deletar($id)
    {
    	// Script de remocao da Clinica
    	DB::insert('DELETE FROM Clinica WHERE IdClinica = ?', array($id));

    	// redirecionando para a pagina inicial da Clinica
    	return redirect('/clinica');
    }
}
