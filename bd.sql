  
  USE login_register_bd;


create table usuarios (
	Id_usuario  int NOT NULL  auto_increment,
	nombre VARCHAR(30),
    correo VARCHAR(30),
    usuario varchar (30),
    contrasena  varchar (30),
	PRIMARY KEY (id_usuario)
);
 Select * from usuarios;

insert into usuarios(nombre,correo,usuario,contrasena)
values ("Aquiles","aquilespolvera@gmail.com","aquiles","1234");

  