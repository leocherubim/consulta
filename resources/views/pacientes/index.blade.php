@extends('layouts.app')

@section('content')

<div class="container">
	<a href="/cadastrar">Cadastrar Paciente</a>
	<br>
	<br>

	<table class="table">
		<!-- Nome das colunas -->
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>CPF</th>
			<th>Nome da Pai</th>
			<th>Nome da Mãe</th>
			<th>RG</th>
			<th>Endereço</th>
			<th>Telefone</th>
			<th>E-mail</th>
			<th>Ações</th>
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