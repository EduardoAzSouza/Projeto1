create database sistema;

use sistema;

create table administrador (
id_adm int not null auto_increment primary key,
nome varchar(40) not null,
login varchar(20) not null unique key,
senha varchar(20) not null
)default charset = utf8;

create table empresa(
id_emp int not null auto_increment primary key,
nome varchar(80) not null,
nome_fant varchar(80) not null,
cnpj varchar(18) not null unique key,
endereco varchar(100) not null,
telefone varchar(16) not null,
responsavel Varchar(40) not null
)default charset = utf8;

create table usuario(
id_user int not null auto_increment primary key,
nome varchar(40) not null,
cpf varchar(14) not null unique key,
cnh varchar(14),
endereco varchar(100) not null,
telefone varchar(16) not null,
carro varchar(30),
empresa_id int not null,
senha varchar(20) not null,
foreign key (empresa_id) references empresa(id_emp)
)default charset = utf8;

drop table empresa;
drop table usuario;
drop table adminstrador;


insert into administrador(nome, login, senha) values
("Administrador", "admin", "admin123");

insert into empresa (nome, nome_fant, cnpj, endereco, telefone, responsavel) values
("Overdrive", "Overdrive Softwares e Consultoria", "73.739.457/0001-96", "Algum lugar de Araras", "(19)98571-2127","Rafael"),
("Sol Agora", "CREDGRID SERVIÇOS FINANCEIROS S.A.", "21.331.849/0001-18", "Algum lugar de Sãp Paulo", "(11)93810-9337", "Sol");

insert into usuario(nome, cpf, cnh, endereco, telefone, carro, empresa_id, senha) values
("Eduardo Souza", "154.682.750-15", "09352766818", "Algun lugar proximo ao Senai", "(11)97514-8976", "Ford Fiesta", 1, "12345678"),
("Alfredo Passos Facre Rabelo", "874.770.940-54", "89873103808", "Algum lugar da America do Sul", "(62)96975-7444", "Chvrolet Classic", 2, "87654321"),
("Pedro Xavier Navega", "142.356.913-09", "53934420716", "Rua Santo Inácio","(85)97584-2925","Brasilia", 1, "87564231");

select nome, empresa_id from usuario;

select * from usuario;

select usuario.nome, usuario.empresa_id from usuario join empresa
on empresa.id_com = empresa.nome;

select * from usuario;

select * from usuario where cpf ="154.682.750-15" and senha ='12345678';

select * from adminstrador where login = "admin" and senha ="admin123";

select * from empresa;

insert into usuario(nome, cpf, cnh, endereco, telefone, carro, empresa_id, senha) values
("Laura Leite", "248.821.351-91", "68048192746", "Algun lugar proximo ao Senai", "(11)97514-8586", "Ford KA", 1, "12345678"),
("Aparecida Valente", "211.445.711-70", "88870271898", "Rua Congonha", "(67)2212-6188", "Civc", 2, "12345678"),
("Firmino Nazare", "750.218.962-96", "88870271898", "Rua Congonha", "(67)2212-6188", "Civc", 2, "12345678"),
("Gabrielle Richa Guzzo", "527.076.198-09", "88870271898", "Rua Congonha", "(67)2212-6188", "Civc", 2, "12345678"),
("Ricardo Campos", "218.171.121-63", "88870271898", "Rua Congonha", "(67)2212-6188", "Civc", 2, "12345678"),
("Maiara França", "813.125.189-60", "88870271898", "Rua Congonha", "(67)2212-6188", "Civc", 2, "12345678"),
("Erick Farias Cormack", "025.901.488-52", "88870271898", "Rua Congonha", "(67)2212-6188", "Civc", 2, "12345678"),
("Gilmara Leandro", "645.810.164-36", "88870271898", "Rua Congonha", "(67)2212-6188", "Civc", 2, "12345678"),
("Maria Barthon", "293.989.552-02", "88870271898", "Rua Congonha", "(67)2212-6188", "Civc", 2, "12345678");

insert into usuario(nome, cpf, endereco, telefone, empresa_id, senha) values
("Arnaldo Carino", "981.362.931-20", "Quadra 254", "(62)3440-3662", 1, "12345678"),
("Domingos Annunziato", "588.541.642-75", "Quadra 913", "(32)3822-3873", 1, "12345678"),
("Frank Richa", "779.759.551-83", "Quadra 745", "(67)3612-1384", 1, "12345678"),
("Fernando Lucas Bastida", "189.518.732-00", "Quadra 687", "(67)2433-4256", 1, "12345678"),
("Katia Mattos Figueiras", "978.215.872-06", "Quadra 357", "(65)2831-6281", 1, "12345678"),
("Henry Ramos Melo", "157.345.824-41", "Quadra 187", "(45)2297-2222", 1, "12345678"),
("Jouceli Gripp Castelete", "636.625.360-99", "Quadra 364", "(75)2680-8802", 1, "12345678"),
("Bento Saldanha Carmanin", "288.211.681-07", "Quadra 678", "(12)2607-4634", 1, "12345678"),
("Dayana de Oliveira", "493.213.184-45", "Quadra 587", "(45)2108-2471", 1, "12345678"),
("Breno Lima Nascimento", "367.939.533-70", "Quadra 675", "(32)2830-4261", 1, "12345678");

