<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;

class PacienteTest extends TestCase
{
	use DatabaseTransactions;

	/**
	 * Inializando os testes
	 */
	public function setUp()
	{
		//DB::table('Paciente')->truncate();
	}

    /**
     * Testando a listagem de pacientes no controller
     *
     * @return void
     */
    public function testListagemDePacientesNoController()
    {
        // configuracao
        //$pacientes = DB::select('select * from Paciente');

        // expectativa

        // comparacao
    }
}
