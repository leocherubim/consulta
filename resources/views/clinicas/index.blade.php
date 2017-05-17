@extends('layouts.app')

@section('content')

<div class="container">
	<a href="/clinica/cadastrar">Cadastrar Clínica</a>
	<br>
	<br>

	<table class="table">
		<!-- Nome das colunas -->
		<tr>
			<th>ID</th>
			<th>UF</th>
			<th>Telefone</th>
			<th>Nome</th>
			<th>Endereco</th>
			<th>CEP</th>
			<th>E-mail</th>
			<th>CNPJ</th>
			<th>Ações</th>
		</tr>

		@foreach($clinicas as $clinica)
		<tr>
			<td>{{$clinica->IdClinica}}</td>
			<td>{{$clinica->UF}}</td>
			<td>{{$clinica->Telefone}}</td>
			<td>{{$clinica->NomeClinica}}</td>
			<td>{{$clinica->Endereco}}</td>
			<td>{{$clinica->CEP}}</td>
			<td>{{$clinica->Email}}</td>
			<td>{{$clinica->CNPJ}}</td>
			<td>
				<a href="/clinica/editar/{{$clinica->IdClinica}}">Editar</a> | 
				<a href="/clinica/deletar/{{$clinica->IdClinica}}">Deletar</a>
			</td>
		</tr>
		@endforeach
	</table>

</div>

@endsection 