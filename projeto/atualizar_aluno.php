<?php
include 'db_config.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$telefone = $_POST['telefone'];
$plano = $_POST['plano'];
$conn->query("UPDATE alunos SET nome='$nome', cpf='$cpf', nascimento='$nascimento', telefone='$telefone', plano='$plano' WHERE id=$id");
header('Location: listar_alunos.php');
?>