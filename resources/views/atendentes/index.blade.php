@extends('layouts.app')

@section('content')

<div class="container">
	<a href="/atendente/cadastrar">Cadastrar Atendente</a>
	<br>
	<br>

	<table class="table">
		<!-- Nome das colunas -->
		<tr>
			<th>ID</th>
			<th>Data de Nascimento</th>
			<th>CPF</th>
			<th>Endereço</th>
			<th>E-mail</th>
			<th>RG</th>
			<th>Pis</th>
			<th>Nome</th>
			<th>Ações</th>
		</tr>

		@foreach($atendentes as $atendente)
		<tr>
			<td>{{$atendente->IdAtendente}}</td>
			<td>{{$atendente->DataNascimento}}</td>
			<td>{{$atendente->CPF}}</td>
			<td>{{$atendente->Endereco}}</td>
			<td>{{$atendente->Email}}</td>
			<td>{{$atendente->RG}}</td>
			<td>{{$atendente->Pis}}</td>
			<td>{{$atendente->NomeAtendente}}</td>
			<td>
				<a href="/atendente/editar/{{$atendente->IdAtendente}}">Editar</a> | 
				<a href="/atendente/deletar/{{$atendente->IdAtendente}}">Deletar</a>
			</td>
		</tr>
		@endforeach
	</table>

</div>

@endsection