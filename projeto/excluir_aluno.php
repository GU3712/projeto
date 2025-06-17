<?php
include 'db_config.php';
$id = $_GET['id'];
$conn->query("DELETE FROM alunos WHERE id=$id");
header('Location: listar_alunos.php');
?>