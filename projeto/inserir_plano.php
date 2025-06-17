<?php
include 'db_config.php';
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$duracao = $_POST['duracao'];
$tipo = $_POST['tipo'];
$instrutor_id = $_POST['instrutor_id'];
$conn->query("INSERT INTO planos (nome, descricao, duracao, tipo, instrutor_id) VALUES ('$nome', '$descricao', '$duracao', '$tipo', '$instrutor_id')");
header('Location: listar_planos.php');
?>