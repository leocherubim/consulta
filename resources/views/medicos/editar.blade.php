@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Cadastrar Médico</h1>

	<a href="/medico">Voltar para listagem</a>
	<br>
	<br>

	<form method="post" action="/medico/atualizado/{{$medico->IdMedico}}">

		Nome: <input type="text" name="nome" value="{{$medico->NomeMedico}}"><br>
		Cpf: <input type="text" name="cpf" value="{{$medico->CPF}}"><br>
		Especialidade: <input type="text" name="especialidade" value="{{$medico->Especialidade}}"><br>
		Crm: <input type="text" name="crm" value="{{$medico->CRM}}"><br>
		RG: <input type="text" name="rg" value="{{$medico->RG}}"><br>
		
		<input type="submit">
	</form>
	
</div>

@endsection