create table usuarios (
id int(11),
PASSWORD varchar(30),
estado VARCHAR(30),
saldo bigint(30),
intentos int(11),
tipo int(11),
username varchar(30) primary key,
nombres varchar(100),
apellidos varchar(100),
email varchar(30)
)



create table movimientos(
idTransaccion  int  PRIMARY key AUTO_INCREMENT ,
fecha varchar(20),
hora varchar(20),
username varchar(30),
saldoinicial bigint(30),
retiro varchar(30),
consignacion varchar(30),
valortransaccion bigint(30),
saldofinal bigint(30),
foreign key (username) references usuarios(username)
)

alter table  usuarios AUTO_INCREMENT=1 
alter table  movimientos AUTO_INCREMENT=100

	