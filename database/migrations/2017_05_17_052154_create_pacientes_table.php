<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->increments('IdPaciente');
            $table->string('Nome')->default('');
            $table->string('CPF')->default('');
            $table->string('NomePai')->default('');
            $table->string('NomeMae')->default('');
            $table->string('RG')->default('');
            $table->string('Endereco')->default('');
            $table->string('Telefone')->default('');
            $table->string('Email')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
