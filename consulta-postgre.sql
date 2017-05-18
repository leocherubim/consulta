CREATE TABLE Paciente (
	IdPaciente SERIAL PRIMARY KEY,
	Nome varchar(60) not null default '',
	CPF varchar(15) not null default '',
	NomePai varchar(60) not null default '',
	NomeMae varchar(60) not null default '',
	RG varchar(15) not null default '',
	Endereco varchar(250) default '',
	Telefone varchar(20) default '',
	Email varchar(30) not null default ''
);

CREATE TABLE Atendente (
	IdAtendente SERIAL PRIMARY KEY,
	DataNascimento varchar(40) not null default '',
	CPF varchar(15) not null default '',
	Endereco varchar(250) default '',
	Email varchar(30) not null default '',
	RG varchar(15) not null default '',
	Pis varchar(20) not null default '',
	NomeAtendente varchar(60) not null default ''
);

CREATE TABLE Medico (
	IdMedico SERIAL PRIMARY KEY,
	NomeMedico varchar(60) not null default '',
	CPF varchar(15) not null default '',
	Especialidade varchar(40) not null default '',
	CRM varchar(20) not null default '',
	RG varchar(15) not null default ''
);

CREATE TABLE Clinica (
	IdClinica SERIAL PRIMARY KEY,
	UF varchar(2) not null default '',
	Telefone varchar(20) default '',
	NomeClinica varchar(60) not null default '',
	Endereco varchar(250) default '',
	CEP varchar(15) not null default '',
	Email varchar(30) not null default '',
	CNPJ varchar(20) not null default ''
);