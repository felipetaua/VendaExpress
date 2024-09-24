CREATE TABLE usuario(
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45),
    cpf VARCHAR(15),
    senha VARCHAR(45)
);

INSERT INTO usuario(nome,cpf,senha) VALUES
('Tauã Felipe', '112.123.121-12','123'),
('Livia Bruno','132.232.124-23','053'),
('Lasanha Junior','804.342.345-29','228');
