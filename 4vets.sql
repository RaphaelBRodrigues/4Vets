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
Descricao text not null,
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
primary key(CompraID)

);

select * from Livro;

INSERT INTO Livro values(null,'1984','George Orwell','https://lojasaraiva.vteximg.com.br/arquivos/ids/12101548/1008972955.jpg?v=637142220125430000','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',50.5);
INSERT INTO Livro values(null,'Fahrenheit 451','Ray Bradbury','https://images-na.ssl-images-amazon.com/images/I/71OFqSRFDgL.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',25.0);
INSERT INTO Livro values(null,'Íliada','Homero','https://www.companhiadasletras.com.br/images/livros/85050_gg.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',65.50);
INSERT INTO Livro values(null,'A Divina comédia','Dante Alighieri','https://images-na.ssl-images-amazon.com/images/I/51DLakKYLVL.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',24.5);
INSERT INTO Livro values(null,'Os irmãos Karamazov','Fiódor Dostoiévski','http://lojasaraiva.vteximg.com.br/arquivos/ids/3230761/1008609529.jpg?v=637033836534000000','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',80.50);
INSERT INTO Livro values(null,'A Guerra dos mundos','H.G Wells','http://lojasaraiva.vteximg.com.br/arquivos/ids/12110072/1006546026.jpg?v=637142251851070000','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."',54.0);
