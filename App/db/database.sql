create database emailmarketing

use  emailmarketing

create table clientes(
    id INT NOT NULL auto_increment,
    nome varchar(50) NULL,
    email varchar(50) NULL,
    nascimento DATE ,
    primary KEY (id)
);

create table usuarios(
    id int NOT NULL auto_increment,
    nome VARCHAR(50) NULL,
    senha varchar(50) NULL,
    PRIMARY KEY(id)
);

INSERT INTO usuarios (nome, senha) VALUES ('admin', 'admin123456');