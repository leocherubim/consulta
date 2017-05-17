@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Cadastrar Atendente</h1>

	<a href="/">Voltar para listagem</a>
	<br>
	<br>

	<form method="post" action="/atendente/registrado">
		Data de Nascimento: <input type="text" name="dataNascimento"><br>
		Cpf: <input type="text" name="cpf"><br>
		Endereço: <input type="text" name="endereco"><br>
		E-mail: <input type="text" name="email"><br>
		RG: <input type="text" name="rg"><br>
		Pis: <input type="text" name="pis"><br>
		Nome: <input type="text" name="nome"><br>
		
		<input type="submit">
	</form>
	
</div>

@endsection