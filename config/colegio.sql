CREATE DATABASE colegio;

USE colegio;

CREATE TABLE Alumnos (
  Id_alumno INT PRIMARY KEY AUTO_INCREMENT,
  Nombre VARCHAR(50),
  Apellido VARCHAR(50),
  Fecha_nacimiento DATE,
  Grado INT
);

CREATE TABLE Profesores (
  Id_profesor INT PRIMARY KEY AUTO_INCREMENT,
  Nombre VARCHAR(50),
  Apellido VARCHAR(50),
  Fecha_nacimiento DATE,
  Titulo_profesor VARCHAR(50)
);

CREATE TABLE Materias (
  Id_materia INT PRIMARY KEY AUTO_INCREMENT,
  Nombre_materia VARCHAR(50),
  Id_alumno INT,
  Id_profesor INT,
  FOREIGN KEY (Id_alumno) REFERENCES Alumnos(Id_alumno),
  FOREIGN KEY (Id_profesor) REFERENCES Profesores(Id_profesor)
);
