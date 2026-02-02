DROP DATABASE personal;
CREATE DATABASE IF NOT EXISTS personal;
USE personal;
CREATE TABLE alumno(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL UNIQUE,
    cedula VARCHAR(10) NOT NULL UNIQUE,
    correo VARCHAR(50) NOT NULL,
    curso VARCHAR(50) NOT NULL
);

CREATE TABLE usuario(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL UNIQUE,
	clave VARCHAR(50) NOT NULL UNIQUE

);
INSERT INTO alumno (nombre, cedula, correo, curso) VALUES
('admin', '1234567890', 'admin@gmail.com', 'Programación');

INSERT INTO USUARIO(nombre, clave) VALUES
('admin','1234');

select * from alumno;