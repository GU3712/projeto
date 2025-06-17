<?php
include 'db_config.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$especialidade = $_POST['especialidade'];
$cref = $_POST['cref'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$conn->query("UPDATE instrutors SET nome='$nome', especialidade='$especialidade', cref='$cref', telefone='$telefone', email='$email' WHERE id=$id");
header('Location: listar_instrutors.php');
?>