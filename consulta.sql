# criação do banco
CREATE DATABASE consulta;

# usando o banco de dados
USE consulta;

# criacao da tabela paciente
CREATE TABLE Paciente (
	IdPaciente int unsigned not null auto_increment,
	Nome varchar(60) not null default '',
	CPF varchar(15) not null default '',
	NomePai varchar(60) not null default '',
	NomeMae varchar(60) not null default '',
	RG varchar(15) not null default '',
	Endereco varchar(250) default '',
	Telefone varchar(20) default '',
	Email varchar(30) not null default '',
	PRIMARY KEY(IdPaciente)
);

# criacao da tabela atendente
CREATE TABLE Atendente (
	IdAtendente int unsigned not null auto_increment,
	DataNascimento varchar(40) not null default '',
	CPF varchar(15) not null default '',
	Endereco varchar(250) default '',
	Email varchar(30) not null default '',
	RG varchar(15) not null default '',
	Pis varchar(20) not null default '',
	NomeAtendente varchar(60) not null default '',
	PRIMARY KEY(IdAtendente)
);

# criacao da tabela medico
CREATE TABLE Medico (
	IdMedico int unsigned not null auto_increment,
	NomeMedico varchar(60) not null default '',
	CPF varchar(15) not null,
	Especialidade varchar(40) not null default '',
	CRM varchar(20) not null,
	RG varchar(15) not null,
	PRIMARY KEY(IdMedico)
);

# criacao da tabela clinica
CREATE TABLE Clinica (
	IdClinica int unsigned not null auto_increment,
	UF char(2) not null,
	Telefone varchar(20),
	NomeClinica varchar(60) not null default '',
	Endereco varchar(250),
	CEP varchar(15) not null,
	Email varchar(30) not null,
	CNPJ varchar(20) not null,
	PRIMARY KEY(IdClinica)
);

#criacao da tabela consulta
CREATE TABLE Consulta (
	IdConsulta int unsigned not null auto_increment,
	IdPaciente int unsigned,
	IdAtendente int unsigned,
	IdMedico int unsigned,
	IdClinica int unsigned,
	PrescricaoMedica varchar(255),
	DtRetorno date,
	Encaminhamento varchar(50),
	HoraConsulta time not null,
	DtConsulta date not null,
	PRIMARY KEY(IdConsulta),
	CONSTRAINT fk_Consulta_Paciente FOREIGN KEY (IdPaciente) REFERENCES Paciente(IdPaciente),
	CONSTRAINT fk_Consulta_Atendente FOREIGN KEY (IdPaciente) REFERENCES Atendente(IdAtendente),
	CONSTRAINT fk_Consulta_Medico FOREIGN KEY (IdMedico) REFERENCES Medico(IdMedico),
	CONSTRAINT fk_Consulta_Clinica FOREIGN KEY (IdClinica) REFERENCES Clinica(IdClinica)
);