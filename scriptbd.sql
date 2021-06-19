CREATE SCHEMA ESTUDO_THIAGO;
USE ESTUDO_THIAGO;

CREATE TABLE CADASTRO (
id INT PRIMARY KEY auto_increment,
nome VARCHAR(60) NULL,
email VARCHAR(60) NULL
);

DROP TABLE CADASTRO;
select * from cadastro;

INSERT INTO CADASTRO (nome, email) VALUES ("Informatica", "informatica@rossisolucoes.com.br");