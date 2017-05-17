@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Editar Atendente</h1>

	<a href="/">Voltar para listagem</a>
	<br>
	<br>

	<form method="post" action="/atendente/atualizado/{{$atendente->IdAtendente}}">
		Data de Nascimento: <input type="text" name="dataNascimento" value="{{$atendente->DataNascimento}}"><br>
		Cpf: <input type="text" name="cpf" value="{{$atendente->CPF}}"><br>
		Endereço: <input type="text" name="endereco" value="{{$atendente->Endereco}}"><br>
		E-mail: <input type="text" name="email" value="{{$atendente->Email}}"><br>
		RG: <input type="text" name="rg" value="{{$atendente->RG}}"><br>
		Pis: <input type="text" name="pis" value="{{$atendente->Pis}}"><br>
		Nome: <input type="text" name="nome" value="{{$atendente->NomeAtendente}}"><br>
		
		<input type="submit">
	</form>
	
</div>

@endsection