@extends('layouts.app')

@section('content')

<div class="container">
	<a href="/consulta/cadastrar">Cadastrar Consulta</a>
	<br>
	<br>

	<table class="table">
		<!-- Nome das colunas -->
		<tr>
			<th>ID</th>
			<th>Paciente</th>
			<th>Atendente</th>
			<th>Medico</th>
			<th>Clínica</th>
			<th>Prescrição Médica</th>
			<th>Retorno</th>
			<th>Encaminhamento</th>
			<th>Hora da Consulta</th>
			<th>Data da Consulta</th>
			<th>Ações</th>
		</tr>

		@foreach($consultas as $consulta)
		<tr>
			<td>{{$consulta->IdConsulta}}</td>
			<td>{{$consulta->NomePaciente}}</td>
			<td>{{$consulta->NomeAtendente}}</td>
			<td>{{$consulta->NomeMedico}}</td>
			<td>{{$consulta->NomeClinica}}</td>
			<td>{{$consulta->PrescricaoMedica}}</td>
			<td>{{$consulta->DtRetorno}}</td>
			<td>{{$consulta->Encaminhamento}}</td>
			<td>{{$consulta->HoraConsulta}}</td>
			<td>{{$consulta->DtConsulta}}</td>
			<td>
				<a href="/consulta/editar/{{$consulta->IdConsulta}}">Editar</a> | 
				<a href="/consulta/deletar/{{$consulta->IdConsulta}}">Deletar</a>
			</td>
		</tr>
		@endforeach
	</table>

</div>

@endsection