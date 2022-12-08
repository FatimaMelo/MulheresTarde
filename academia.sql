obs. if not exists (verifica se o banco ou tabela existe)

drop database if exists academia1; 

create database academia1 character set utf8 COLLATE utf8_general_ci;

use academia1;

create table endereco(
	cep char(9) primary key,
	rua varchar(60)not null,
	bairro varchar(40)not null,
	cidade varchar(40)not null,
	uf char(2)not null);
	
create table aluno(
	matricula integer primary key,
	nome varchar(60)not null,
	telefone varchar(15)not null,
	cpf char(14)not null,
	rg varchar(15)not null,
	datanascimento date not null,
	cep char(9) not null,
	numerocasa smallint not null,
	complemento varchar(30), 
	foto varchar(255),
	foreign key(cep)references endereco(cep));
	
create table funcionario(
	cpffuncionario char(14)primary key,
	nome varchar(60)not null,
	telefone varchar(15)not null,
	rg varchar(15)not null,
	cep char(9) not null,
	numerocasa smallint not null,
	complemento varchar(30), 
	foto varchar(255),
	foreign key(cep)references endereco(cep));
	
create table professor(
	idprofessor integer primary key,
	disponibilidade varchar(40)not null,
	cpffuncionario char(14)not null,
	foreign key(cpffuncionario)references funcionario(cpffuncionario));
	
create table atividade(
	idatividade integer primary key auto_increment,
		nomeatividade varchar(60)not null,
		descricao varchar(100)not null);
		
create table habilitaprofessor(
	idhabilitacao integer primary key auto_increment,
	idatividade integer not null,
	idprofessor integer not null,
	foreign key(idatividade)references atividade(idatividade),
	foreign key(idprofessor)references professor(idprofessor));

create table aula(
	idaula integer primary key auto_increment,
	dataaula date not null,
	horario varchar(30)not null,
	idprofessor integer not null,
	idatividade integer not null,
	foreign key(idprofessor)references professor(idprofessor),
	foreign key(idatividade)references atividade(idatividade));

create table aulaaluno(
	idaulaaluno integer primary key auto_increment,
	matricula integer not null,
	idaula integer not null,
	foreign key(matricula)references aluno(matricula),
	foreign key(idaula)references aula(idaula));
	
create table produto(
	codigoproduto integer primary key auto_increment,
	nome varchar(60)not null,
	cor varchar(30)not null,
	valor double not null,
	tamanho char(2)not null,
	quantidade integer not null);
	
create table venda(
	idvenda integer primary key auto_increment,
	data date not null,
	valor double not null,
	quantidade integer not null,
	codigoproduto integer not null,
	cpffuncionario char(14)not null,
	foreign key(codigoproduto)references produto(codigoproduto),
	foreign key(cpffuncionario)references funcionario(cpffuncionario));
	

	

	










