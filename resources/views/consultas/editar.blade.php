@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Editar Consulta</h1>

	<a href="/consulta">Voltar para listagem</a>
	<br>
	<br>

	<form method="post" action="/consulta/atualizado/{{$consulta->IdConsulta}}">

		<!-- Listagem de pacientes na TAG SELECT -->
		Paciente:
		<select name="IdPaciente">
			@foreach($pacientes as $paciente)
			<!-- Armazenando a chave primario do paciente -->
			<option value="{{$paciente->IdPaciente}}">{{$paciente->Nome}}</option>
			@endforeach
		</select>
		<br>

		<!-- Listagem de atendentes na TAG SELECT -->
		Atendente:
		<select name="IdAtendente">
			@foreach($atendentes as $atendente)
			<!-- Armazenando a chave primario do atendente -->
			<option value="{{$atendente->IdAtendente}}">{{$atendente->NomeAtendente}}</option>
			@endforeach
		</select>
		<br>

		<!-- Listagem de medicos na TAG SELECT -->
		Médico:
		<select name="IdMedicos">
			@foreach($medicos as $medico)
			<!-- Armazenando a chave primario do medico -->
			<option value="{{$medico->IdMedico}}">{{$medico->NomeMedico}}</option>
			@endforeach
		</select>
		<br>

		<!-- Listagem de clinicas na TAG SELECT -->
		Clínica:
		<select name="IdClinica">
			@foreach($clinicas as $clinica)
			<!-- Armazenando a chave primario da clinica -->
			<option value="{{$clinica->IdClinica}}">{{$clinica->NomeClinica}}</option>
			@endforeach
		</select>
		<br>

		<!-- Campo de cadastro de PRESCRICAO MEDICO -->
		Prescrição Médica: <input type="text" name="prescricaoMedica" value="{{$consulta->PrescricaoMedica}}">
		<br>

		<!-- Campo de cadastro de DATA PARA RETORNO -->
		Data de Retorno: <input type="text" name="dataRetorno" value="{{$consulta->DtRetorno}}">
		<br>

		<!-- Campo de cadastro de ENCAMINHAMENTO -->
		Encaminhamento: <input type="text" name="encaminhamento" value="{{$consulta->Encaminhamento}}">
		<br>

		<!-- Campo de cadastro de HORA CONSULTA -->
		Horário da Consulta: <input type="text" name="horaConsulta" value="{{$consulta->HoraConsulta}}">
		<br>

		<!-- Campo de cadastro de DATA CONSULTA -->
		Data da Consulta: <input type="text" name="dataConsulta" value="{{$consulta->DtConsulta}}">
		<br>
		
		<input type="submit">
	</form>
	
</div>

@endsection