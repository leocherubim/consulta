<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

/**
 * Classe responsavel por controlar as requisicoes do usuario
 * para a manipulacao dos pacientes no banco de dados e
 * para o redirecionamento das paginas HTML.
 * Neste Controller estarao presentes os metodos
 * de CRUD referente ao paciente.
 */
class PacientesController extends Controller
{
	/**
	 * Acao responsavel por redirecionar para a pagina
	 * inicial da aplciacao
	 */
    public function index()
    {
    	// executando o script de select dos pacientes
    	$pacientes = DB::select('SELECT * FROM Paciente');

    	// redirecionar para a pagina index com a listagem dos pacientes
    	return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Acao responsavel por cadastrar o paciente
     */
    public function cadastrar()
    {
        // redirecionar para o formulario de cadastro
    	return view('pacientes.cadastrar');
    }

    /**
     * Metodo responsavel por receber as requisicoes
     * do formulario. Os dados do formulario estarao
     * presentes na variavel $request
     */
    public function efetuarCadastro(Request $request)
    {
    	// Nome do Paciente
    	$nome = $request->input('nome');
    	// CPF do Paciente
    	$cpf = $request->input('cpf');
    	// Nome do pai
    	$nomePai = $request->input('nomePai');
    	// Nome da mae
    	$nomeMae = $request->input('nomeMae');
    	// RG do Paciente
    	$rg = $request->input('rg');
    	// Endereco do paciente
    	$endereco = $request->input('endereco');
    	// Telefone do Paciente
    	$telefone = $request->input('telefone');
    	// Email do Paciente
    	$email = $request->input('email');

    	// Executando o script de insercao de dados
    	DB::insert('INSERT INTO Paciente (Nome, CPF, NomePai, NomeMae, RG, Endereco, Telefone, Email)'
    				.'VALUES (?,?,?,?,?,?,?,?)', 
    				array($nome, $cpf, $nomePai, $nomeMae, $rg, $endereco, $telefone, $email)
    	);

    	// redirecionando para a pagina inicial de Paciente
    	return redirect('/');
    }

    /**
     * Formulario de edicao do Paciente via. O Paciente
     * e recuperado pela chave primaria
     */
    public function editar($id)
    {
    	// Script de select para recuperar o Paciente pela chave primaria.
    	// O retorno sera um vetor com uma posicao e sera chamado a posicao 0
    	$paciente = DB::select('SELECT * FROM Paciente WHERE IdPaciente = ?', array($id))[0];
    	
    	// redirecinar para a pagina com o formulario de edicao
    	return view('pacientes.editar', compact('paciente'));
    }

    /**
     * Recupera os dados da edicao do Paciente
     */
    public function efetuarAtualizacao(Request $request, $id)
    {
    	// Nome do Paciente
    	$nome = $request->input('nome');
    	// CPF do Paciente
    	$cpf = $request->input('cpf');
    	// Nome do pai
    	$nomePai = $request->input('nomePai');
    	// Nome da mae
    	$nomeMae = $request->input('nomeMae');
    	// RG do Paciente
    	$rg = $request->input('rg');
    	// Endereco do paciente
    	$endereco = $request->input('endereco');
    	// Telefone do Paciente
    	$telefone = $request->input('telefone');
    	// Email do Paciente
    	$email = $request->input('email');

    	// Executando o script para atualizacoes dos dados do Paciente
    	DB::insert('UPDATE Paciente SET '
    				.'Nome = ?, CPF = ?, NomePai = ?, NomeMae = ?, RG = ?, Endereco = ?, Telefone = ?, Email = ? '
    				.'WHERE IdPaciente = ?', 
    				array($nome, $cpf, $nomePai, $nomeMae, $rg, $endereco, $telefone, $email, $id)
    	);

    	// redirecionando para a pagina inicial de Paciente
    	return redirect('/');
    }

    /**
     * Removendo o Paciente a partir da chave primaria
     */
    public function deletar($id)
    {
    	// Script de remocao do Paciente
    	DB::insert('DELETE FROM Paciente WHERE IdPaciente = ?', array($id));

    	// redirecionando para a pagina inicial de Paciente
    	return redirect('/');
    }

}
