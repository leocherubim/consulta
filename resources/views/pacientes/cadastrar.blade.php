@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Cadastrar Paciente</h1>

	<a href="/">Voltar para listagem</a>
	<br>
	<br>

	<form method="post" action="/paciente/registrado">
		Nome: <input type="text" name="nome"><br>
		Cpf: <input type="text" name="cpf"><br>
		Nome do Pai: <input type="text" name="nomePai"><br>
		Nome da Mãe: <input type="text" name="nomeMae"><br>
		RG: <input type="text" name="rg"><br>
		Endereço: <input type="text" name="endereco"><br>
		Telefone: <input type="text" name="telefone"><br>
		E-mail: <input type="text" name="email"><br>

		<input type="submit">
	</form>
	
</div>

@endsection