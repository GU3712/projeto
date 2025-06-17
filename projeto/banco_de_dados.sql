CREATE DATABASE IF NOT EXISTS c;
USE c;

CREATE TABLE alunos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100),
  cpf VARCHAR(14),
  nascimento DATE,
  telefone VARCHAR(15),
  plano VARCHAR(50)
);

CREATE TABLE instrutores (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100),
  especialidade VARCHAR(50),
  cref VARCHAR(20),
  telefone VARCHAR(15),
  email VARCHAR(100)
);

CREATE TABLE planos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50),
  descricao TEXT,
  duracao INT,
  tipo VARCHAR(30),
  instrutor_id INT,
  FOREIGN KEY (instrutor_id) REFERENCES instrutores(id)
);