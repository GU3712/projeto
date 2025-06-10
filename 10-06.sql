CREATE DATABASE IF NOT EXISTS sistem;
USE sistem;

CREATE TABLE IF NOT EXISTS fornecedores (
    ID_Fornecedor INT AUTO_INCREMENT PRIMARY KEY,
    Nome_Fantasia VARCHAR(100) NOT NULL,
    Razao_Social VARCHAR(150) NOT NULL,
    CNPJ VARCHAR(20) NOT NULL,
    Inscricao_Estadual VARCHAR(30),
    Inscricao_Municipal VARCHAR(30),
    Telefone_Principal VARCHAR(20),
    Email_Contato VARCHAR(100)
);