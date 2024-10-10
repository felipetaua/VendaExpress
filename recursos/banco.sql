/*Criação do banco de dados*/


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


CREATE TABLE cidade (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50),
    cep VARCHAR(15),
    estado VARCHAR(15)
);


INSERT INTO cidade(nome, cep, estado) VALUES 
('Nova Londrina', '87.970-000', 'Paraná'),
('Marilena', '87.960-000', 'Paraná');


CREATE TABLE funcionario (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255),
    cpf VARCHAR(15),
    celular VARCHAR(15),
    endereco VARCHAR(255),
    numero INT,
    bairro VARCHAR(255),
    email VARCHAR(255),
    cargo VARCHAR(255),
    salario VARCHAR(50),
    cidade_id INT,
    FOREIGN KEY (cidade_id) REFERENCES cidade(id)
);

INSERT INTO funcionario(nome, cpf, celular, endereco, numero, bairro, email, cargo, salario, cidade_id) VALUES
('Pamela', '777.777.777-77', '(55)97777-7777', 'Rua Nova Londrina', 500, 'Centro', 'pamela.@gmail.com', 'Gerente', '4.500', 2); 


CREATE TABLE cliente (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255),
    cpf VARCHAR(15),
    celular VARCHAR(15),
    endereco VARCHAR(255),
    numero INT,
    bairro VARCHAR(255),
    email VARCHAR(255),
    cidade_id INT,
    FOREIGN KEY (cidade_id) REFERENCES cidade(id)
);

INSERT INTO cliente(nome, cpf, celular, endereco, numero, bairro, email, cidade_id) VALUES
('Pamela', '777.777.777-77', '(55)97777-7777', 'Rua Nova Londrina', 500, 'Centro', 'pamela.@gmail.com', 2); 


CREATE TABLE venda(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    observacao VARCHAR(255),
    valor_total INT,
    quantidade_total INT, 
    data_venda DATETIME DEFAULT CURRENT_TIMESTAMP,
    cliente_id INT, 
    funcionario_id INT,
    FOREIGN KEY (cliente_id) REFERENCES cliente(id),
    FOREIGN KEY (funcionario_id) REFERENCES funcionario(id)
);

INSERT INTO venda (observacao, valor_total, quantidade_total, cliente_id, funcionario_id) VALUES
('Venda a prazo', 50, 2, 1, 1);


CREATE TABLE produto (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    estoque INT,
    custo INT,
    lucro INT,
    margem INT
);

INSERT INTO produto (nome, preco, estoque, custo, lucro, margem) VALUES
('Mouse', 70, 3, 40, 30, 90);


CREATE TABLE item_venda (
     id INT AUTO_INCREMENT NOT NULL PRIMARY KEY, 
     quantidade INT, 
     valor DECIMAL(10,2), 
     venda_id INT, 
     produto_id INT, 
     FOREIGN KEY (venda_id) REFERENCES venda(id), 
     FOREIGN KEY (produto_id) REFERENCES produto(id) 
);

INSERT INTO item_venda (quantidade, valor, venda_id, produto_id) VALUES
(2, 140, 1, 1),
(2, 140, 1, 1);