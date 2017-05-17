@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Cadastrar Médico</h1>

	<a href="/medico">Voltar para listagem</a>
	<br>
	<br>

	<form method="post" action="/medico/registrado">
		Nome: <input type="text" name="nome"><br>
		Cpf: <input type="text" name="cpf"><br>
		Especialidade: <input type="text" name="especialidade"><br>
		Crm: <input type="text" name="crm"><br>
		RG: <input type="text" name="rg"><br>
		
		<input type="submit">
	</form>
	
</div>

@endsection