
create database clientes
default caracter set utf8	
default collate	utf8_general_ci;

create table (
id int not null auto_increment, 
nome varchar(30) not null,
telefone int(11),
sexo enum('M','F'),
email varchar(30),
data date,
cpf decimal('3,3,3,2'),
primary key (id)
) default charset = utf8;

