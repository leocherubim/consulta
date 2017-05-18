<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

/**
 * Classe responsavel por controlar as requisicoes do usuario
 * para a manipulacao das consultas no banco de dados e
 * para o redirecionamento das paginas HTML.
 * Neste Controller estarao presentes os metodos
 * de CRUD referente a consulta.
 */
class ConsultasController extends Controller
{
	/**
	 * Metodo responsavel por retornar a listagem inicial de consultas.
	 * Pelo fato desta tabela possuir muitos relacionamentos, sera utilizado
	 * o script sql left join, primeiramente o join sera para retornar o nome
	 * de identificacao do relacionamento e o left e para trazer sempre todos
	 * os itens relacionados, mesmo quando consiste em um valor nulo.
	 */
    public function index()
    {
    	// select responsavel por retornar os dados da consulta e a identificacao dos relacionamentos
    	$consultas = DB::select('SELECT c.*, p.Nome as NomePaciente, ' 
    		.'a.NomeAtendente, m.NomeMedico, cl.NomeClinica FROM Consulta c '
    		// retornando o nome do paciente junto com o select
    		.'LEFT JOIN Paciente p ON p.IdPaciente = c.IdPaciente '
    		// retornando o nome do atendente
    		.'LEFT JOIN Atendente a ON a.IdAtendente = c.IdAtendente '
    		// retornando o nome do medico
    		.'LEFT JOIN Medico m ON m.IdMedico = c.IdMedico '
    		// retornando o nome da clinica
    		.'LEFT JOIN Clinica cl ON cl.IdClinica = c.IdClinica;'
    	);

    	return view('consultas.index', compact('consultas'));
    }

    /**
     * Acao responsavel por cadastrar a consulta.
     * Esta view precisa de uma lista de Paciente,
     * Atendente, Medico e Clinica. Serao utilizado
     * o comando SELECT para o retorno das listas e
     * todas elas serao inseridas na view.
     */
    public function cadastrar()
    {
        // retorna todos pacientes cadastrados no banco
        $pacientes = DB::select('SELECT * FROM Paciente;');
        // retorna todos atendentes cadastrados
        $atendentes = DB::select('SELECT * FROM Atendente;');
        // retorna todos medicos cadastrados
        $medicos = DB::select('SELECT * FROM Medico;');
        // retorna todos medicos cadastrados
        $clinicas = DB::select('SELECT * FROM Clinica;');

        // redirecionar para o formulario de cadastro
        return view('consultas.cadastrar', compact('pacientes', 'atendentes', 'medicos', 'clinicas'));
    }

    /**
     * Metodo responsavel por receber as requisicoes
     * do formulario. Os dados do formulario estarao
     * presentes na variavel $request. As chaves de cada
     * entidade relacionada serão passadas na requisicao.
     */
    public function efetuarCadastro(Request $request)
    {
        // chave primaria do paciente
        $idPaciente = $request->input('IdPaciente');
        // chave primaria do atendente
        $idAtendente = $request->input('IdAtendente');
        // chave primaria do medico
        $idMedico = $request->input('IdMedico');
        // chave primaria do clinica
        $idClinica = $request->input('IdClinica');
        // prescricao medica
        $prescricaoMedica = $request->input('prescricaoMedica');
        // data de retorno
        $dataRetorno = $request->input('dataRetorno');
        // encaminhamento
        $encaminhamento = $request->input('encaminhamento');
        // hora da consulta
        $horaConsulta = $request->input('horaConsulta');
        // data da consulta
        $dataConsulta = $request->input('dataConsulta');

        // executando a insercao do valor
        DB::insert('INSERT INTO Consulta (IdPaciente, IdAtendente, IdMedico, IdClinica, ' 
            .'PrescricaoMedica, DtRetorno, Encaminhamento, HoraConsulta, DtConsulta) '
            .'VALUES (?,?,?,?,?,?,?,?,?)', array($idPaciente, $idAtendente, $idMedico, 
                $idClinica, $prescricaoMedica, $dataRetorno, $encaminhamento, $horaConsulta, $dataConsulta)
        );

        // redirecionando para a pagina inicial de Consulta
        return redirect('/consulta');
    }

    /**
     * Formulario de edicao da Consulta.
     */
    public function editar($id)
    {
        // retorna todos pacientes cadastrados no banco
        $pacientes = DB::select('SELECT * FROM Paciente;');
        // retorna todos atendentes cadastrados
        $atendentes = DB::select('SELECT * FROM Atendente;');
        // retorna todos medicos cadastrados
        $medicos = DB::select('SELECT * FROM Medico;');
        // retorna todos medicos cadastrados
        $clinicas = DB::select('SELECT * FROM Clinica;');

        // Script de select para recuperar a Consulta pela chave primaria.
        // O retorno sera um vetor com uma posicao e sera chamado a posicao 0
        $retornoListaConsulta = DB::select('SELECT * FROM Consulta WHERE IdConsulta = ?', array($id));
        // o script retorna uma lista com apenas a unica consulta encontrada
        // e esta consulta e passada como a posicao 0 da lista
        $consulta = $retornoListaConsulta[0];
        
        // redirecinar para a pagina com o formulario de edicao
        return view('consultas.editar', compact('consulta', 'pacientes', 'atendentes', 'medicos', 'clinicas'));
    }

    /**
     * Metodo responsavel por receber as requisicoes
     * do formulario de atualizacao. Os dados do formulario estarao
     * presentes na variavel $request. As chaves de cada
     * entidade relacionada serão passadas na requisicao.
     */
    public function efetuarAtualizacao(Request $request, $id)
    {
        // chave primaria do paciente
        $idPaciente = $request->input('IdPaciente');
        // chave primaria do atendente
        $idAtendente = $request->input('IdAtendente');
        // chave primaria do medico
        $idMedico = $request->input('IdMedico');
        // chave primaria do clinica
        $idClinica = $request->input('IdClinica');
        // prescricao medica
        $prescricaoMedica = $request->input('prescricaoMedica');
        // data de retorno
        $dataRetorno = $request->input('dataRetorno');
        // encaminhamento
        $encaminhamento = $request->input('encaminhamento');
        // hora da consulta
        $horaConsulta = $request->input('horaConsulta');
        // data da consulta
        $dataConsulta = $request->input('dataConsulta');

        // Executando o script para atualizacoes dos dados da Consulta
        DB::insert('UPDATE Consulta SET '
            .'IdPaciente = ?, IdAtendente = ?, IdMedico = ?, IdClinica = ?, PrescricaoMedica = ?, ' 
            .'DtRetorno = ?, Encaminhamento = ?, HoraConsulta = ?, DtConsulta = ? '
            .'WHERE IdPaciente = ?', array($idPaciente, $idAtendente, $idMedico, 
                $idClinica, $prescricaoMedica, $dataRetorno, $encaminhamento, $horaConsulta, $dataConsulta, $id)
        );

        // redirecionando para a pagina inicial de Consulta
        return redirect('/consulta');
    }

    /**
     * Removendo a Consulta a partir da chave primaria
     */
    public function deletar($id)
    {
        // Script de remocao da Consulta
        DB::insert('DELETE FROM Consulta WHERE IdConsulta = ?', array($id));

        // redirecionando para a pagina inicial da Consulta
        return redirect('/consulta');
    }
}
