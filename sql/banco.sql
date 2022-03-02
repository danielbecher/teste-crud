CREATE DATABASE IF NOT EXISTS empresa;

USE empresa;

CREATE TABLE IF NOT EXISTS funcionarios (
	`id`  INT AUTO_INCREMENT,
	`nome` VARCHAR(100) NOT NULL,
	`nasc` DATE NOT NULL,
	`cpf` INT(11) NOT NULL,
	`email` VARCHAR(50) NOT NULL,
	`civil` VARCHAR(12) NOT NULL,
	PRIMARY KEY (id)
);

INSERT INTO funcionarios (nome,nasc,cpf,email,civil) VALUES (
	"Daniel Becher","1983-10-19","05121156995","daniel@becher.com.br","Solteiro" );