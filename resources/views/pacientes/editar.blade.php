@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Editar Paciente</h1>

	<a href="/">Voltar para listagem</a>
	<br>
	<br>

	<form method="post" action="/paciente/atualizado/{{$paciente->IdPaciente}}">

		Nome: <input type="text" name="nome" value="{{$paciente->Nome}}"><br>
		Cpf: <input type="text" name="cpf" value="{{$paciente->CPF}}"><br>
		Nome do Pai: <input type="text" name="nomePai" value="{{$paciente->NomePai}}"><br>
		Nome da Mãe: <input type="text" name="nomeMae" value="{{$paciente->NomeMae}}"><br>
		RG: <input type="text" name="rg" value="{{$paciente->RG}}"><br>
		Endereço: <input type="text" name="endereco" value="{{$paciente->Endereco}}"><br>
		Telefone: <input type="text" name="telefone" value="{{$paciente->Telefone}}"><br>
		E-mail: <input type="text" name="email" value="{{$paciente->Email}}"><br>

		<input type="submit">
	</form>
	
</div>

@endsection