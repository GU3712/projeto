<?php
include 'db_config.php';
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$telefone = $_POST['telefone'];
$plano = $_POST['plano'];
$conn->query("INSERT INTO alunos (nome, cpf, nascimento, telefone, plano) VALUES ('$nome', '$cpf', '$nascimento', '$telefone', '$plano')");
header('Location: listar_alunos.php');
?>