create database egide;
use egide;

create table Usuario(
UsuarioID int auto_increment,
Nome varchar(40) not null unique,
cep varchar(9) not null,
Ncasa int(8) not null,
Senha text not null,
Usuario text not null,
primary key(UsuarioID)
);

desc Usuario