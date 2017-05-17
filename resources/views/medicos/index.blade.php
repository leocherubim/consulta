@extends('layouts.app')

@section('content')

<div class="container">
	<a href="/medico/cadastrar">Cadastrar Médico</a>
	<br>
	<br>

	<table class="table">
		<!-- Nome das colunas -->
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>CPF</th>
			<th>Especialidade</th>
			<th>Crm</th>
			<th>RG</th>
			<th>Ações</th>
		</tr>

		@foreach($medicos as $medico)
		<tr>
			<td>{{$medico->IdMedico}}</td>
			<td>{{$medico->NomeMedico}}</td>
			<td>{{$medico->CPF}}</td>
			<td>{{$medico->Especialidade}}</td>
			<td>{{$medico->CRM}}</td>
			<td>{{$medico->RG}}</td>
			<td>
				<a href="/medico/editar/{{$medico->IdMedico}}">Editar</a> | 
				<a href="/medico/deletar/{{$medico->IdMedico}}">Deletar</a>
			</td>
		</tr>
		@endforeach
	</table>

</div>

@endsection 