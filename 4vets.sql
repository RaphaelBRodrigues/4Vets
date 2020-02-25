
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

select * from Usuario;