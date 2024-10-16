-- Cria a database
CREATE DATABASE Sonic_BAS;

-- Sinaliza qual database está sendo utilizada
USE Sonic_BAS;

-- Cria a tabela que será armazenada as informações preenchidas no formulario
CREATE TABLE tb_formulario (
    form_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    form_nome VARCHAR(100) NOT NULL,
    form_idade INT,
    form_genero VARCHAR(30),
    form_datanascimento DATE,
    form_email VARCHAR(100),
    form_telefone VARCHAR(20)
);


-- Para deletar a database
DROP DATABASE Sonic_BAS;