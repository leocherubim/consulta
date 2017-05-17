@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Cadastrar Clínica</h1>

	<a href="/clinica">Voltar para listagem</a>
	<br>
	<br>

	<form method="post" action="/clinica/atualizado/{{$clinica->IdClinica}}">

		Uf: <input type="text" name="uf" value="{{$clinica->UF}}"><br>
		Telefone: <input type="text" name="telefone" value="{{$clinica->Telefone}}"><br>
		Nome: <input type="text" name="nome" value="{{$clinica->NomeClinica}}"><br>
		Endereco: <input type="text" name="endereco" value="{{$clinica->Endereco}}"><br>
		CEP: <input type="text" name="cep" value="{{$clinica->CEP}}"><br>
		E-mail: <input type="text" name="email" value="{{$clinica->Email}}"><br>
		CNPJ: <input type="text" name="cnpj" value="{{$clinica->CNPJ}}"><br>
		
		<input type="submit">
	</form>
	
</div>

@endsection