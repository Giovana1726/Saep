CREATE DATABASE Saep01

USE Saep01

CREATE TABLE Usuarios
(      id_Usu int primary key auto_increment,
       Nome varchar(60),
       Email varchar(50));
       
CREATE TABLE Tarefas
(      id_Tar int primary key auto_increment,
       Setor varchar(45),
       Prioridade varchar(45),
       Descricao varchar(200),
       Status varchar(45));
       
ALTER TABLE Tarefas
ADD COLUMN id_Usu int,
ADD CONSTRAINT fk_id_Usuario FOREIGN KEY (id_Usu) REFERENCES Usuarios(id_Usu);