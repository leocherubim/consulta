@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Cadastrar Clínica</h1>

	<a href="/clinica">Voltar para listagem</a>
	<br>
	<br>

	<form method="post" action="/clinica/registrado">

		Uf: <input type="text" name="uf"><br>
		Telefone: <input type="text" name="telefone"><br>
		Nome: <input type="text" name="nome"><br>
		Endereco: <input type="text" name="endereco"><br>
		CEP: <input type="text" name="cep"><br>
		E-mail: <input type="text" name="email"><br>
		CNPJ: <input type="text" name="cnpj"><br>
		
		<input type="submit">
	</form>
	
</div>

@endsection