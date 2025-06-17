<?php
include 'db_config.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$duracao = $_POST['duracao'];
$tipo = $_POST['tipo'];
$instrutor_id = $_POST['instrutor_id'];
$conn->query("UPDATE planos SET nome='$nome', descricao='$descricao', duracao='$duracao', tipo='$tipo', instrutor_id='$instrutor_id' WHERE id=$id");
header('Location: listar_planos.php');
?>