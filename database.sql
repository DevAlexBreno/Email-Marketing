create database emailmarketing

use  emailmarketing

create table clientes(
    id INT NOT NULL auto_increment,
    nome varchar(50) NULL,
    email varchar(50) NULL,
    nascimento DATE ,
    primary KEY (id)
);