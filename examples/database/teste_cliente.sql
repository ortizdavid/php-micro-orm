CREATE DATABASE teste_cliente;
USE teste_cliente;


DROP TABLE IF EXISTS clientes;
CREATE TABLE IF NOT EXISTS clientes (
  id_cliente INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  sexo ENUM('Feminino','Masculino'),
  data_nasc date NOT NULL,
  altura FLOAT
); 

DROP TABLE IF EXISTS contactos;
CREATE TABLE IF NOT EXISTS contactos (
  id_contacto INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_cliente INT(11) NOT NULL,
  telefone INT(9) UNIQUE  NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  CONSTRAINT fk_cliente_contacto FOREIGN KEY (id_cliente) REFERENCES clientes (id_cliente)
);

