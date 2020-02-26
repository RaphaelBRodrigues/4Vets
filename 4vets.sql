create database egide;
use egide;

create table Usuario(
UsuarioID int auto_increment,
Nome varchar(40) not null unique,
cep varchar(9) not null,
Bairro text not null,
Logradouro text not null,

Ncasa int(8) not null,
Senha text not null,
Usuario text not null,
Hint text not null,
primary key(UsuarioID)
);


create table Livro(
LivroID int auto_increment,
Titulo varchar(40) not null unique,
Autor varchar(40) not null,
linkImg text not null,
Preco float not null,
primary key(LivroID)
);

create table Carrinho(
CarrinhoID int  auto_increment,
LivroID int,
UsuarioID int,
SessaoID int,
FOREIGN KEY(LivroID) references Livro(LivroID),
FOREIGN KEY(UsuarioID) references Usuario(UsuarioID),
primary key(CarrinhoID)

);

create table Compra(
CompraID int  auto_increment,
UsuarioID int,
Total int,
SessaoID int,
FOREIGN KEY(UsuarioID) references Usuario(UsuarioID),
FOREIGN KEY(SessaoID) references Carrinho(SessaoID),
primary key(CompraID)

);


