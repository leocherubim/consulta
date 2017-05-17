<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

/**
 * Classe responsavel por controlar as requisicoes do usuario
 * para a manipulacao dos medicos no banco de dados e
 * para o redirecionamento das paginas HTML.
 * Neste Controller estarao presentes os metodos
 * de CRUD referente ao medico.
 */

class MedicosController extends Controller
{
    /**
	 * Acao responsavel por redirecionar para a pagina
	 * inicial da listagem de medicos
	 */
    public function index()
    {
    	// executando o script de select dos medicos
    	$medicos = DB::select('SELECT * FROM Medico');

    	// redirecionar para a pagina index com a listagem dos medicos
    	return view('medicos.index', compact('medicos'));
    }

    /**
     * Acao responsavel por cadastrar o medico
     */
    public function cadastrar()
    {
        // redirecionar para o formulario de cadastro
    	return view('medicos.cadastrar');
    }

    /**
     * Metodo responsavel por receber as requisicoes
     * do formulario. Os dados do formulario estarao
     * presentes na variavel $request
     */
    public function efetuarCadastro(Request $request)
    {
    	// Nome do Medico
    	$nome = $request->input('nome');
    	// CPF do Medico
    	$cpf = $request->input('cpf');
    	// Especialidade do Medico
    	$especialidade = $request->input('especialidade');
    	// Crm do Medico
    	$crm = $request->input('crm');
    	// RG do Medico
    	$rg = $request->input('rg');

    	// Executando o script de insercao de dados
    	DB::insert('INSERT INTO Medico (NomeMedico, CPF, Especialidade, CRM, RG)'
    				.'VALUES (?,?,?,?,?)', 
    				array($nome, $cpf, $especialidade, $crm, $rg)
    	);

    	// redirecionando para a pagina inicial de Medico
    	return redirect('/medico');
    }

    /**
     * Formulario de edicao do Medico. O Medico
     * e recuperado pela chave primaria
     */
    public function editar($id)
    {
    	// Script de select para recuperar o Medico pela chave primaria.
    	// O retorno sera um vetor com uma posicao e sera chamado a posicao 0
    	$retornoListaMedico = DB::select('SELECT * FROM Medico WHERE IdMedico = ?', array($id));
        // o script retorna uma lista com apenas o unico medico encontrado
        // e este medico e passado como a posicao 0 da lista
        $medico = $retornoListaMedico[0];
    	
    	// redirecinar para a pagina com o formulario de edicao
    	return view('medicos.editar', compact('medico'));
    }

    /**
     * Recupera os dados da edicao do Medico
     */
    public function efetuarAtualizacao(Request $request, $id)
    {
    	// Nome do Medico
    	$nome = $request->input('nome');
    	// CPF do Medico
    	$cpf = $request->input('cpf');
    	// Especialidade do Medico
    	$especialidade = $request->input('especialidade');
    	// Crm do Medico
    	$crm = $request->input('crm');
    	// RG do Medico
    	$rg = $request->input('rg');

    	// Executando o script para atualizacoes dos dados do Medico
    	DB::insert('UPDATE Medico SET '
    				.'NomeMedico = ?, CPF = ?, Especialidade = ?, CRM = ?, RG = ? '
    				.'WHERE IdMedico = ?', 
    				array($nome, $cpf, $especialidade, $crm, $rg, $id)
    	);

    	// redirecionando para a pagina inicial de Medico
    	return redirect('/medico');
    }

    /**
     * Removendo o Medico a partir da chave primaria
     */
    public function deletar($id)
    {
    	// Script de remocao do Medico
    	DB::insert('DELETE FROM Medico WHERE IdMedico = ?', array($id));

    	// redirecionando para a pagina inicial do Medico
    	return redirect('/medico');
    }
}
