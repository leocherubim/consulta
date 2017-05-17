<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

/**
 * Classe responsavel por controlar as requisicoes do usuario
 * para a manipulacao dos atendentes no banco de dados e
 * para o redirecionamento das paginas HTML.
 * Neste Controller estarao presentes os metodos
 * de CRUD referente ao atendente.
 */
class AtendentesController extends Controller
{
    /**
	 * Acao responsavel por redirecionar para a pagina
	 * inicial da listagem de atendentes
	 */
    public function index()
    {
    	// executando o script de select dos atendentes
    	$atendentes = DB::select('SELECT * FROM Atendente');

    	// redirecionar para a pagina index com a listagem dos atendentes
    	return view('atendentes.index', compact('atendentes'));
    }

    /**
     * Acao responsavel por cadastrar o atendente
     */
    public function cadastrar()
    {
        // redirecionar para o formulario de cadastro
    	return view('atendentes.cadastrar');
    }

    /**
     * Metodo responsavel por receber as requisicoes
     * do formulario. Os dados do formulario estarao
     * presentes na variavel $request
     */
    public function efetuarCadastro(Request $request)
    {
    	// Data de nascimento do atendente
    	$dataNascimento = $request->input('dataNascimento');
    	// CPF do Atentente
    	$cpf = $request->input('cpf');
    	// Endereco do Atentente
    	$endereco = $request->input('endereco');
    	// Email do Atentente
    	$email = $request->input('email');
    	// RG do Atentente
    	$rg = $request->input('rg');
    	// Pis do Atentente
    	$pis = $request->input('pis');
    	// Nome do Atendente
    	$nome = $request->input('nome');

    	// Executando o script de insercao de dados
    	DB::insert('INSERT INTO Atendente (DataNascimento, CPF, Endereco, Email, RG, Pis, NomeAtendente)'
    				.'VALUES (?,?,?,?,?,?,?)', 
    				array($dataNascimento, $cpf, $endereco, $email, $rg, $pis, $nome)
    	);

    	// redirecionando para a pagina inicial de Atendente
    	return redirect('/atendente');
    }

    /**
     * Formulario de edicao do Atendente via. O Atendente
     * e recuperado pela chave primaria
     */
    public function editar($id)
    {
    	// Script de select para recuperar o Atendente pela chave primaria.
    	// O retorno sera um vetor com uma posicao e sera chamado a posicao 0
    	$retornoListaAtendente = DB::select('SELECT * FROM Atendente WHERE IdAtendente = ?', array($id));
        // o script retorna uma lista com apenas o unico atendente encontrado
        // e este atendente e passado como a posicao 0 da lista
        $atendente = $retornoListaAtendente[0];
    	
    	// redirecinar para a pagina com o formulario de edicao
    	return view('atendentes.editar', compact('atendente'));
    }

    /**
     * Recupera os dados da edicao do Atendente
     */
    public function efetuarAtualizacao(Request $request, $id)
    {
    	// Data de nascimento do atendente
    	$dataNascimento = $request->input('dataNascimento');
    	// CPF do Atentente
    	$cpf = $request->input('cpf');
    	// Endereco do Atentente
    	$endereco = $request->input('endereco');
    	// Email do Atentente
    	$email = $request->input('email');
    	// RG do Atentente
    	$rg = $request->input('rg');
    	// Pis do Atentente
    	$pis = $request->input('pis');
    	// Nome do Atendente
    	$nome = $request->input('nome');

    	// Executando o script para atualizacoes dos dados do Atendente
    	DB::insert('UPDATE Atendente SET '
    				.'DataNascimento = ?, CPF = ?, Endereco= ?, Email = ?, RG = ?, Pis = ?, NomeAtendente = ? '
    				.'WHERE IdAtendente = ?', 
    				array($dataNascimento, $cpf, $endereco, $email, $rg, $pis, $nome, $id)
    	);

    	// redirecionando para a pagina inicial de Atendente
    	return redirect('/atendente');
    }

    /**
     * Removendo o Atendente a partir da chave primaria
     */
    public function deletar($id)
    {
    	// Script de remocao do Atendente
    	DB::insert('DELETE FROM Atendente WHERE IdAtendente = ?', array($id));

    	// redirecionando para a pagina inicial de Atendente
    	return redirect('/atendente');
    }
}
