@extends('layouts.app')

@section('content')

<div class="container">
	<a href="/cadastrar">Cadastrar Paciente</a>
	<br>
	<br>

	<table class="table">
		<!-- Nome das colunas -->
		<tr>
			<td>ID</td>
			<td>Nome</td>
			<td>CPF</td>
			<td>Nome da Pai</td>
			<td>Nome da Mãe</td>
			<td>RG</td>
			<td>Endereço</td>
			<td>Telefone</td>
			<td>E-mail</td>
			<td>Ações</td>
		</tr>

		@foreach($pacientes as $paciente)
		<tr>
			<td>{{$paciente->IdPaciente}}</td>
			<td>{{$paciente->Nome}}</td>
			<td>{{$paciente->CPF}}</td>
			<td>{{$paciente->NomePai}}</td>
			<td>{{$paciente->NomeMae}}</td>
			<td>{{$paciente->RG}}</td>
			<td>{{$paciente->Endereco}}</td>
			<td>{{$paciente->Telefone}}</td>
			<td>{{$paciente->Email}}</td>
			<td>
				<a href="/editar/{{$paciente->IdPaciente}}">Editar</a> | 
				<a href="/deletar/{{$paciente->IdPaciente}}">Deletar</a>
			</td>
		</tr>
		@endforeach
	</table>

</div>

@endsection