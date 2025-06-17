<?php
include 'db_config.php';
$nome = $_POST['nome'];
$especialidade = $_POST['especialidade'];
$cref = $_POST['cref'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$conn->query("INSERT INTO instrutors (nome, especialidade, cref, telefone, email) VALUES ('$nome', '$especialidade', '$cref', '$telefone', '$email')");
header('Location: listar_instrutors.php');
?>