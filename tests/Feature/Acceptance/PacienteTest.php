<?php

namespace Tests\Feature\Acceptance;

use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class PacienteTest extends TestCase
{
	/**
	 * Metodo responsavel por executar
	 * antes dos testes
	 */
	public function setUp()
	{
		// truncate na tabela Paciente
		$users = DB::table('Paciente')->get();
	}

    /**
     * Visualizacao da pagina inicial de pacientes
     * com a listagem do mesmo
     *
     * @return void
     */
    public function testListagemDosPacientesCadastrado()
    {
        /*
         |
         | Configuracao
         |
         */
        // rota da listagem de pacientes
        $routeIndex = route('pacientes.index');
        //

        /*
         |
         | Expectativa
         |
         */
         // redirecionamento para a pagina index de paciente
        $this->visit($routeIndex);

         /*
         |
         | Comparacao
         |
         */
        // visualizacao do nome do paciente
        $this->see('Leonardo Cherubini');
        // email do paciente
        $this->see('cherubini18@gmail.com');
    }
}
